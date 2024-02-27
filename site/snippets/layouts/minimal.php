<div class="layout layout-minimal">
  <?php /* TODO check width value in final layout */
    $width = 50
  ?>
  <?php snippet('components/image', [
    'file' => $file,
    'width' => $width,
    'srcset' => 'image_'.$width,
    'classname' => NULL,
    'alt' => $file->alt(),
    'caption' => $file->caption()
  ]); ?>
  <?php snippet('components/text', ['content' => $text ]) ?>
</div>