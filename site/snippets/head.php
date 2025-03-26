<!DOCTYPE html>
<html lang="en-US" class="<?php e($kirby->user(), 'user-logged-in', 'user-not-logged-in') ?>">
<head>
  <meta charset="utf-8">
<?php if ($page->intendedTemplate()->name() == 'posts') :?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<?php else: ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=1">
<?php endif ?>
  <meta name="description" content="<?php e($globals->meta_description(), $globals->meta_description(), $site_title) ?>">
  <meta name="og:description" content="<?php e($globals->meta_description(), $globals->meta_description(), $site_title) ?>">
<?php if ($globals->meta_image()->toFile()): ?>
  <meta name="og:image" content="<?= $globals->meta_image()->toFile()->url() ?>">
  <meta name="og:image:type" content="<?= $globals->meta_image()->toFile()->mime() ?>">
  <meta name="og:image:width" content="<?= $globals->meta_image()->toFile()->width() ?>">
  <meta name="og:image:height" content="<?= $globals->meta_image()->toFile()->height() ?>">
<?php endif ?>
  <meta name="og:type" content="website">
  <meta name="og:title" content="<?= $site_title ?>">
  <meta name="og:site_name" content="<?= $site_title ?>">
  <meta name="og:url" content="<?= $site->url() ?>">
  <title><?= $site_title ?></title>
<?php if ($globals->favicon()->toFile()): ?>
  <link rel="shortcut icon" href="<?= $globals->favicon()->toFile()->crop(72)->url() ?>">
  <link rel="apple-touch-icon" href="<?= $globals->favicon()->toFile()->crop(320)->url() ?>">
<?php endif ?>
  <meta name="theme-color" content="#f0f0f0">
  <meta name="robots" content="index, nofollow">

  <?= vite()->js('index.js', ['defer' => true]) ?>
  <?= vite()->css('index.scss') ?>
  <?= vite()->js("templates/{{ page.template }}.js", ['defer' => true], try: true) ?>
  <?= vite()->css("templates/{{ page.template }}.scss", try: true) ?>

<?php if ($page->intendedTemplate()->name() == 'post'): ?>
  <?= css(['/static/styles/plugins/hljs.css', '@auto']) ?>
  <?php if ($custom_css && $page->layout_type() == "advanced"): ?>
      <style><?= $custom_css ?></style>
  <?php endif ?>
<?php endif ?>

<?php if ($page->intendedTemplate()->name() == 'home'): ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@8.2.0/themes/reset-min.css" integrity="sha256-D+cGTF0LVHjuEf+CDRkHeNw/KTHPg47t1AA/qmzxgtA=" crossorigin="anonymous">
<?php endif ?>

</head>

<body class="template-<?= $page->intendedTemplate() ?> page-<?= $page->slug() ?>"
  data-template-slug="<?= $page->intendedTemplate() ?>"
  data-page-slug="<?= $page->slug() ?>"
  data-page-url="<?= $page->url() ?>"
  data-page-title="<?= $page->title() ?>"
  data-site-url="<?= $site->url() ?>"
  data-site-title="<?= $site_title ?>">
  <h1 style="display:none;"><?= $site->title() ?></h1>

