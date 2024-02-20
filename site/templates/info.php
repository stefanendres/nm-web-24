<?php snippet('head'); ?>
<?php //snippet('header'); ?>
<main>
  <a href="<?= $site->url() ?>">Home</a>
  <hr>
  <h2 class="headline">
    <?= $page->about_headline() ?>
  </h2>
  <div class="textfield">
    <?= $page->about_text() ?>
  </div>
  <ul>
    <?php foreach($page->teaching_staff()->toStructure() as $list_element): ?>
      <li>
        <?php if ($list_element->profile_picture()->isNotEmpty()) : ?>
          <img class="profile-picture" src="<?= $list_element->profile_picture()->toFile()->url() ?>"/>
        <?php endif ?>
        <span><?= $list_element->name() ?></span>
      </li>
    <?php endforeach ?>
  </ul>
</main>
<?php //snippet('cookie'); ?>
<?php snippet('foot'); ?>