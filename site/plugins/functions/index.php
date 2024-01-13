<?php // globally available functions
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