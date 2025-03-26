<div class="post-overlay overlay<?= e($page->show_overlay() && $page->show_overlay()->toBool() == false, ' hide-on-load', '') ?>">
  <div class="wrapper">
    <?php /* ROW TITLE */ ?>
    <div class="title">
      <?php if ($page->preview_image()->isNotEmpty()):
        $file = $page->preview_image()->toFile();
        snippet('components/image', [
          'file' => $file,
          'width' => 20,
          'srcset' => 'thumb_icon',
          'link' => NULL,
          'classname' => 'thumb',
          'alt' => $file->alt(),
          'caption' => $file->alt()
        ]);
      endif ?>
      <h2><?= $page->title() ?></h2>
    </div>
    <?php /* ROW CATEGORY & TAGS */ ?>
    <?php if ($page->tags()->isNotEmpty()): ?>
      <div class="data data-0">
        <?php //if ($overlay_content['category']): ?>
        <?php /*  <div class="category"><?= $overlay_content['category'] ?></div> */ ?>
        <?php //endif ?>
        <div class="tags">
          <?= $page->tags() ?>
        </div>
      </div>
    <?php endif ?>
    <?php /* ROW DESCRIPTION */ ?>
    <?php if ($page->description()->isNotEmpty()): ?>
      <div class="data data-2">
        <?= $page->description() ?>
      </div>
    <?php endif ?>
    <?php /* ROW AUTHOR, PARTICIPANTS & YEARS */ ?>
    <?php if ($page->author_id()->isNotEmpty() ||$page->participants()->isNotEmpty()): ?>
      <div class="data data-1">
        <ul>
        <?php if ($page->author_id()->isNotEmpty() && $page->participants()->isEmpty()): ?>
          <li class="author">
            <?= $page->author_id()->toUser()->name() ?>
          </li>
        <?php endif ?>
        <?php if ($page->participants()->isNotEmpty()): ?>
          <?php foreach ($page->participants()->toUsers() as $user): ?>
            <li class="participant">
              <?= $user->name() ?>
            </li>
          <?php endforeach ?>
        <?php endif ?>
        </ul>
        <?php if ($overlay_content['year']): ?>
          <div><?= $overlay_content['year'] ?></div>
        <?php endif ?>
      </div>
    <?php endif ?>
    <?php /* ROW RELATED CONTENT */ ?>
    <?php if ($page->related_posts()->isNotEmpty()): ?>
      <div class="data data-3">
        <div class="header">
          <div>Related Content</div>
          <button class="expand">
            <div class="title">Expand</div>
            <div class="icon">
              <?= svg('static/images/expand-black.svg') ?>
            </div>
          </button>
        </div>
        <ul>
          <?php foreach($page->related_posts()->toPages(',') as $post): ?>
            <li>
              <a class="related-post" href="<?= $post->url() ?>"><?= $post->title() ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    <?php endif ?>
  </div>
</div>