<div class="swiper-slide post-thumb style-tiny">
  <a class="wrapper" href="<?= $post->url() ?>">
    <?php if ($post->preview_image()->isNotEmpty()):
      $file = $post->preview_image()->toFile();
      snippet('components/image', [
        'file' => $file,
        'width' => 20,
        'srcset' => 'thumb_icon',
        'link' => NULL,
        'classname' => 'thumb',
        'alt' => $post->title(), // ATTENTION
        'caption' => NULL
      ]);
    endif ?>
    <h3><?= $post->title() ?></h3>
  </a>
</div>
    