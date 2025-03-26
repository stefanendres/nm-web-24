<?php $images = $block->images()->toFiles() ?>
<div class="swiper" data-slide-count="<?= count($images) ?>" style="aspect-ratio:<?= $block->ratio()->value() ?>;">
  <div class="swiper-controls">
    <div class="swiper-pagination"></div>
  </div>
  <div class="swiper-wrapper">
  <?php foreach($images as $image): ?>
    <div class="swiper-slide">
      <?php snippet('components/image', [
        'file' => $image,
        'width' => $width,
        'srcset' => 'image_'.$width,
        'link' => $image->link_object(),
        'classname' => NULL,
        'alt' => $image->alt(),
        'caption' => $image->caption()
      ]); ?>
    </div>
  <?php endforeach ?>
  </div>

</div>
