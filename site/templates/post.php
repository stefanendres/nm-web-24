<?php snippet('head', ['custom_css' => $custom_css ]); ?>
<?php //snippet('header'); ?>
<main>
  <a href="<?= $site->url() ?>">Home</a>
  <hr>
  <h2><?= $page->title() ?></h2>
  <h3><?= $page->author_name() ?></h3>
  <small><?= $page->modified('d/m/Y H:i') ?></small>
  <hr>

  <?php if ($page->layout_type()->isNotEmpty()): ?>
    <?php if ($page->layout_type() == 'simple' && $page->blocks()->isNotEmpty()): ?>
      <?php snippet('layouts/simple', ['content' => $page->blocks()->toBlocks()]) ?>
    <?php elseif ($page->layout_type() == 'advanced' && $page->layout()->isNotEmpty()): ?>
      <?php snippet('layouts/advanced', ['content' => $page->layout()->toLayouts()]) ?>
    <?php endif ?>
  <?php else: ?>
    <?php snippet('layouts/minimal', ['file' => $page->preview_image()->toFile(), 'text' => $page->description() ]) ?>
  <?php endif ?>

  <?php //snippet('footer'); ?>
</main>
<?php //snippet('cookie'); ?>
<?php snippet('foot'); ?>