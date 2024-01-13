<?php snippet('head'); ?>
<?php //snippet('header'); ?>
<main>
  <?php if ($page): ?>
    <section class="<?= $page->intendedTemplate() ?>" data-slug="<?= $page->intendedTemplate() ?>">
      <?= $page->text()->kti()?>
    </section>
  <?php endif ?>
  <?php //snippet('footer'); ?>
</main>
<?php //snippet('cookie'); ?>
<?php snippet('foot'); ?>
