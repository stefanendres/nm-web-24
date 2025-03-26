<div class="swiper-slide post-thumb style-medium">
  <?php if ($post->preview_image()->isNotEmpty()):
    $file = $post->preview_image()->toFile();
    snippet('components/image', [
      'file' => $file,
      'width' => 20,
      'srcset' => 'thumb_20',
      'link' => NULL,
      'classname' => 'thumb',
      'alt' => $post->title(), // ATTENTION
      'caption' => NULL
    ]);
  endif ?>
  <a class="wrapper" href="<?= $post->url() ?>">
    <?php /* ROW TITLE */ ?>
    <div class="title">
      <h3><?= $post->title() ?></h3>
    </div>
  </a>
</div>