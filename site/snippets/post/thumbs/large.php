<div class="swiper-slide post-thumb style-large">
  <?php if ($post->preview_image()->isNotEmpty()):
    $file = $post->preview_image()->toFile();
    snippet('components/image', [
      'file' => $file,
      'width' => 25,
      'srcset' => 'thumb_25',
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
    <?php /* ROW CATEGORY & TAGS */ ?>
    <?php if ($post->tags()->isNotEmpty()): ?>
      <div class="data data-0">
        <div class="tags">
          <?= $post->tags() ?>
        </div>
      </div>
    <?php endif ?>
    <?php /* ROW AUTHOR, PARTICIPANTS & YEARS */ ?>
    <?php if ($post->author_id()->isNotEmpty() ||$post->participants()->isNotEmpty()): ?>
      <div class="data data-1">
        <ul>
        <?php if ($post->author_id()->isNotEmpty() && $post->participants()->isEmpty()): ?>
          <li class="author">
            <?= $post->author_id()->toUser()->name() ?>
          </li>
        <?php endif ?>
        <?php if ($post->participants()->isNotEmpty()): ?>
          <?php foreach ($post->participants()->toUsers() as $user): ?>
            <li class="participant">
              <?= $user->name() ?>
            </li>
          <?php endforeach ?>
        <?php endif ?>
        </ul>
        <?php if ($post->year_select()->isNotEmpty()): ?>
          <div><?= rework_years($post->year_select()) ?></div>
        <?php endif ?>
      </div>
    <?php endif ?>
  </a>
</div>