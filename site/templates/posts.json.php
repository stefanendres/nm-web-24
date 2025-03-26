<?php

$data = $posts->flip();
$json = [];

foreach($data as $post) {

  $json[] = [
    'objectID' => (string)$post->uuid()->id(), // objectID is for Algolia
    'url'   => (string)$post->url(),
    'thumbSrc' => ($post->preview_image()->isNotEmpty()) ? (string)$post->preview_image()->toFile()->crop(240,240,80)->url() : NULL,
    'title' => (string)$post->title(),
    'category' => (string)get_category($post),
    'tags'  => $post->tags()->split(),
    'description'  => (string)Str::unhtml($post->description()),
    'author' => ($post->author_id()->toUser()) ? (string)$post->author_id()->toUser()->name() : NULL,
    'years' => ($post->year_select()->isNotEmpty()) ? (string)rework_years($post->year_select()) : NULL
  ];

}

echo json_encode($json);