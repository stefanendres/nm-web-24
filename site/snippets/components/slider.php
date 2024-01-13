<div class="swiper" data-slide-count="<?= count($slider_items->toStructure()) ?>">
  <div class="swiper-wrapper">
  <?php foreach($slider_items->toStructure() as $item): ?>
    <div class="swiper-slide <?= $item->slide_type() ?>">
      <?php if ($item->slide_type() == 'type_image'): ?>
        <?php snippet('image', [
          'file' => $item->slide_image()->toFile(),
          'width' => 50,
          'srcset' => 'thumb_50',
          'classname' => NULL,
          'title' => NULL
        ]) ?>
      <?php elseif ($item->slide_type() == 'type_embed'): ?>
        <?php if ($item->slide_embed()->isNotEmpty() && extract_src_from_iframe($item->slide_embed())): ?>
          <iframe class="lazyload"
            title="<?= $site_title ?>"
            scrolling="no"
            data-src="<?= extract_src_from_iframe($item->slide_embed()) ?>">
          </iframe>
        <?php else: ?>
          EMBED CODE ERROR: PLEASE PROVIDE A VALID ENTRY
        <?php endif ?>
      <?php else: ?>
        CONTENT FIELD MISSING: SELECT A SLIDE-TYPE
      <?php endif ?>
    </div>
  <?php endforeach ?>
  </div>
  <div class="swiper-controls">
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button swiper-button-next"></div>
  </div>
</div>
