<?php snippet('head'); ?>
<?php snippet('info/header'); ?>
<main> 
  <section class="intro">
    <h2>
      <?= $page->about_headline() ?>
    </h2>
    <?= $page->about_text() ?>
  </section>
  <section class="collection staff active">
    <header class="section">
      <h2>Current Staff</h2>
    </header>
    <div class="swiper" data-slide-count="<?= $page->teaching_staff()->toStructure()->count() ?>">
      <ul class="swiper-wrapper">
        <?php foreach($page->teaching_staff()->toStructure() as $person):
          if ($person->status() == "active"):
            snippet('info/profile', ['person' => $person]);
          endif;
        endforeach ?>
      </ul>
    </div>
  </section>
  <section class="collection staff inactive">
    <header class="section">
      <h2>Former Staff</h2>
    </header>
    <div class="swiper" data-slide-count="<?= $page->teaching_staff()->toStructure()->count() ?>">
      <ul class="swiper-wrapper">
        <?php foreach($page->teaching_staff()->toStructure() as $person):
          if ($person->status() == "inactive"):
            snippet('info/profile', ['person' => $person]);
          endif;
        endforeach ?>
      </ul>
    </div>
  </section>
</main>
<?php snippet('footer'); ?>
<?php //snippet('cookie'); ?>
<?php snippet('foot'); ?>