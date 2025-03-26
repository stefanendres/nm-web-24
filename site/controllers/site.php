<?php
/**
 * Controllers allow you to separate the logic of your templates from your markup.
 * This is especially useful for complex logic, but also in general to keep your templates clean.
 *
 *
 * More about controllers:
 * https://getkirby.com/docs/guide/templates/controllers
 */
return function($site, $page, $pages, $kirby) {
  $site_title = ($page->isHomePage()) ? $site->title() : $site->title() . ' ' . $page->title();
  $globals = ($pages->template('globals')) ? $pages->template('globals')->first()->content() : NULL;
  $ui_text = ($pages->template('ui_text')) ? $pages->template('ui_text')->first()->content() : NULL;
  $nav_pages = (object)[
    'posts' => (object)[
      'url' => $site->children()->listed()->template('posts')->first()->url(),
      'slug' => $site->children()->listed()->template('posts')->first()->slug(),
      'title' => $site->children()->listed()->template('posts')->first()->title()
    ],
    'info' => (object)[
      'url' => $site->children()->listed()->template('info')->first()->url(),
      'slug' => $site->children()->listed()->template('info')->first()->slug(),
      'title' => $site->children()->listed()->template('info')->first()->title()
    ]
  ];

  return compact(
    'site_title',
    'nav_pages',
    'globals',
    'ui_text'
  );
};
?>
