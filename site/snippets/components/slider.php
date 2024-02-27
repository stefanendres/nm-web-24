<?php $images = $block->images()->toFiles() ?>
<div class="swiper" data-slide-count="<?= count($images) ?>">
  <div class="swiper-wrapper">
  <?php foreach($images as $image): ?>
    <div class="swiper-slide">
      <?php snippet('components/image', [
        'file' => $image,
        'width' => $width,
        'srcset' => 'image_'.$width,
        'classname' => NULL,
        'alt' => $image->alt(),
        'caption' => $image->caption()
      ]); ?>
    </div>
  <?php endforeach ?>
  </div>
  <div class="swiper-controls">
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button swiper-button-next"></div>
  </div>
</div>
