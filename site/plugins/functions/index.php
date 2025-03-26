<?php // globally available functions

function get_category ($page) {
  return ($page->category()->isNotEmpty()) ? $page->blueprint()->field('category')['options'][$page->category()->value()] : NULL;
}

function rework_years ($field) {
  $year = NULL;
  if ($field->isNotEmpty()) {
    if(count($field->split()) > 1) {
      $years = $field->split();
      if ($years[0] > $years[1]) {
        $year = $years[1].' – '.$years[0];
      } else {
        $year = $years[0].' – '.$years[1];
      }
    } else {
      $year = $field;
    }
  }
  return $year;
}

function get_filename ($path) {
  $files = glob($path);
  $filename = basename($files[0]);
  return $filename;
}

function convert_ratio ($file_ratio) {
  //$ratio = str_replace(',', '.', ''.(1/$file_ratio).''); // replace "," with "." to make ratio calcable in css
  $ratio = str_replace(',', '.', ''.($file_ratio).''); // replace "," with "." to make ratio calcable in css
  return $ratio;
}

//https://stackoverflow.com/questions/2955251/php-function-to-make-slug-url-string
function slugify ($text, string $divider = '-') {
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, $divider);

  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}




// Algolia API functions
require __DIR__ . "/../../../vendor/autoload.php";
use Algolia\AlgoliaSearch\SearchClient;

function deleteItemFromAlgoliaIndex($objectID) {
  $env = parse_ini_file(".env");
  // Connect and authenticate with your Algolia app
  $client = SearchClient::create($env["ALGOLIA_APP_ID"], $env["ALGOLIA_WRITE_API_KEY"]);
  $index = $client->initIndex($env["ALGOLIA_INDEX_NAME"]);
  $index->deleteObject($objectID)->wait();
}

function addItemToAlgoliaIndex($post) {
  $env = parse_ini_file(".env");

  $object = [
    'objectID' => (string)$post->uuid()->id(), // objectID is for Algolia
    'url'   => (string)$post->url(),
    'thumbSrc' => ($post->preview_image()->isNotEmpty()) ? (string)$post->preview_image()->toFile()->crop(240,240,80)->url() : "",
    'title' => (string)$post->title(),
    'category' => (string)get_category($post),
    'tags'  => $post->tags()->split(),
    'description'  => (string)Str::unhtml($post->description()),
    'author' => ($post->author_id()->toUser()) ? (string)$post->author_id()->toUser()->name() : "",
    'years' => ($post->year_select()->isNotEmpty()) ? (string)rework_years($post->year_select()) : ""
  ];
  // Connect and authenticate with your Algolia app
  $client = SearchClient::create($env["ALGOLIA_APP_ID"], $env["ALGOLIA_WRITE_API_KEY"]);
  $index = $client->initIndex($env["ALGOLIA_INDEX_NAME"]);
  $index->saveObject($object)->wait();
}

function replaceAlgoliaIndex($posts) {
  $env = parse_ini_file(".env");
  $posts = $posts->flip();
  $objects = [];
  foreach($posts as $post) {
    $objects[] = [
      'objectID' => (string)$post->uuid()->id(), // objectID is for Algolia
      'url'   => (string)$post->url(),
      'thumbSrc' => ($post->preview_image()->isNotEmpty()) ? (string)$post->preview_image()->toFile()->crop(240,240,80)->url() : "",
      'title' => (string)$post->title(),
      'category' => (string)get_category($post),
      'tags'  => $post->tags()->split(),
      'description'  => (string)Str::unhtml($post->description()),
      'author' => ($post->author_id()->toUser()) ? (string)$post->author_id()->toUser()->name() : "",
      'years' => ($post->year_select()->isNotEmpty()) ? (string)rework_years($post->year_select()) : ""
    ];
  }
  // Connect and authenticate with your Algolia app
  $client = SearchClient::create($env["ALGOLIA_APP_ID"], $env["ALGOLIA_WRITE_API_KEY"]);
  $index = $client->initIndex($env["ALGOLIA_INDEX_NAME"]);
  $index->replaceAllObjects($objects, [
    'safe' => true,
  ]);
}