<?php
  if ($column->width() == '1/1') {
    $width = 100;
  }
  if ($column->width() == '1/2') {
    $width = 50;
  }
  if ($column->width() == '1/3') {
    $width = 33;
  }
?>
<li class="width-<?= $width ?>" data-id="<?= $column->id() ?>">
  <?php foreach ($column->blocks() as $block): ?>
    <?php if ($block->type() == 'image'): ?>
      <?php snippet('components/image', [
        'file' => $block->image()->toFile(),
        'width' => $width,
        'srcset' => 'thumb_'.$width,
        'classname' => NULL,
        'alt' => $block->alt()
      ]); ?>
    <?php endif ?>
    <?php if ($block->type() == 'localvideo'): ?>
      <?php snippet('components/video_thumb', compact('block')); ?>
    <?php endif ?>
    <?php if ($block->type() == 'text' && $block->text()->isNotEmpty()): ?>
      <p><?= $block->text() ?></p>
    <?php endif ?>
  <?php endforeach ?>
</li>