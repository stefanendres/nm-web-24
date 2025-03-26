<header class="legal">
  <button class="back" onclick="history.back()">
    <div class="title">Back</div>
  </button>
  <a class="site-title" href="<?= $site->url() ?>">
    <?= $site->title() ?>
  </a>
  <a class="page <?= $nav_pages->info->slug ?>" href="<?= $nav_pages->info->url ?>">
    <?= $nav_pages->info->title ?>
  </a>
</header>