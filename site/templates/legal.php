<?php snippet('head'); ?>
<?php snippet('legal/header'); ?>
<main>
  <section class="<?= $page->intendedTemplate() ?>" data-slug="<?= $page->intendedTemplate() ?>">
    <?= $page->text()->kti()?>
  </section>
</main>
<?php snippet('footer'); ?>
<?php //snippet('cookie'); ?>
<?php snippet('foot'); ?>
