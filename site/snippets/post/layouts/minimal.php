<div class="layout layout-minimal">
  <?php /* TODO check width value in final layout */
    $width = 100;
  ?>
  <?php snippet('components/image', [
    'file' => $file,
    'width' => $width,
    'srcset' => 'image_'.$width,
    'link' => NULL,
    'classname' => NULL,
    'alt' => $file->alt(),
    'caption' => $file->caption()
  ]); ?>
</div>