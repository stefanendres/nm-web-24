<?php snippet('head', ['custom_css' => $custom_css ]); ?>
<?php snippet('post/header'); ?>
<main>
  <?php snippet('post/overlay', ['content' => $overlay_content]) ?>
  <?php if ($page->layout_type()->isNotEmpty()): ?>
    <?php if ($page->layout_type() == 'simple' && $page->blocks()->isNotEmpty()): ?>
      <?php snippet('post/layouts/simple', ['content' => $page->blocks()->toBlocks()]) ?>
    <?php elseif ($page->layout_type() == 'advanced' && $page->layout()->isNotEmpty()): ?>
      <?php snippet('post/layouts/advanced', ['content' => $page->layout()->toLayouts()]) ?>
    <?php endif ?>
  <?php else: ?>
    <!-- TODO rework to overlay conecpt if layout-minimal-->
    <?php snippet('post/layouts/minimal', ['file' => $page->preview_image()->toFile(), 'text' => $page->description() ]) ?>
  <?php endif ?>
</main>
<?php snippet('footer'); ?>
<?php //snippet('cookie'); ?>
<?php snippet('foot'); ?>