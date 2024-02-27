<!DOCTYPE html>
<html lang="en-US" class="<?php e($kirby->user(), 'user-logged-in', 'user-not-logged-in') ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=1">

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
<?php endif?>
  <!--<link rel="manifest" href="site.webmanifest">-->
  <meta name="theme-color" content="#f0f0f0">
  <meta name="robots" content="index, nofollow">

<?= css(['assets/styles/'.get_filename('assets/styles/*.css'), '@auto']) ?>
<?= js(['assets/scripts/plugins/modernizr.js', '@auto']) ?>

<?php if ($page->intendedTemplate()->name() == 'post'): ?>
  <?= css(['assets/styles/plugins/hljs.css', '@auto']) ?>
  <?php if ($custom_css && $page->layout_type() == "advanced"): ?>
      <style><?= $custom_css ?></style>
  <?php endif ?>
<?php endif ?>

</head>

<body class="template-<?= $page->intendedTemplate() ?> page-<?= $page->slug() ?>"
  data-template-slug="<?= $page->intendedTemplate() ?>"
  data-page-slug="<?= $page->slug() ?>"
  data-page-url="<?= $page->url() ?>"
  data-page-title="<?= $page->title() ?>"
  data-site-url="<?= $site->url() ?>"
  data-site-title="<?= $site_title ?>">
  <h1><?= $site->title() ?></h1>

