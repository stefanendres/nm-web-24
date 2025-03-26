<div class="swiper-slide post-thumb style-small">
  <a class="wrapper" href="<?= $post->url() ?>" title="<?= $post->title() ?>">
    <?php if ($post->preview_image()->isNotEmpty()):
      $file = $post->preview_image()->toFile();
      snippet('components/image', [
        'file' => $file,
        'width' => 16.666,
        'srcset' => 'thumb_16.666',
        'link' => NULL,
        'classname' => 'thumb',
        'alt' => $post->title(), // ATTENTION
        'caption' => NULL
      ]);
    endif ?>
  </a>
</div>