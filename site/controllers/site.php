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
  return compact(
    'site_title',
    'globals',
    'ui_text'
  );
};
?>
