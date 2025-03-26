<?php snippet('head'); ?>
<?php snippet('header'); ?>
<main>
  <?php if ($post_collections):
    foreach($post_collections as $collection): ?>
    <section class="collection">
      <?php if ($collection->label()->isNotEmpty()): ?>
        <header class="section">
          <h2><?= $collection->label() ?></h2>
        </header>
      <?php endif ?>
      <div class="swiper" data-slide-count="<?= $collection->posts()->toPages()->count() ?>">
        <div class="swiper-wrapper">
          <?php foreach($collection->posts()->toPages() as $post): 
            snippet('post/thumbs/'.$collection->style(), compact('post'));
          endforeach ?>
        </div>
      </div>
    </section>
  <?php endforeach;
  endif ?>
</main>
<?php snippet('footer'); ?>
<?php //snippet('cookie'); ?>
<?php snippet('foot'); ?>



