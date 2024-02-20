<?php snippet('head'); ?>
<?php //snippet('header'); ?>
<main>
  <hr>
  <?php if ($posts): ?>
    <h2>Projects</h2>
    <ul>
      <?php foreach ($posts as $post): ?>
        <li>
          <a href="<?= $post->url() ?>">
            <?= $post->title() ?>
          </a>
          <small>
            <?= $post->author_name() ?>
          </small>
        </li>
      <?php endforeach ?>
    </ul>
  <?php else: ?>
    <p>no posts published</p>
  <?php endif ?>
  <hr>
  <pre>
    <?php //var_dump($site) ?>
  </pre>
  <?php //snippet('footer'); ?>
</main>
<?php //snippet('cookie'); ?>
<?php snippet('foot'); ?>
