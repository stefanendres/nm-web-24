<header class="main">
  <a class="page <?= $nav_pages->posts->slug ?>" href="<?= $nav_pages->posts->url ?>">
    <div class="icon">
      <?= svg('static/images/search-white.svg') ?>
    </div> 
    <div class="title"><?= $nav_pages->posts->title ?></div>
  </a>
  <a class="site-title" href="<?= $site->url() ?>">
    <?= $site->title() ?>
  </a>
  <a class="page <?= $nav_pages->info->slug ?>" href="<?= $nav_pages->info->url ?>">
    <?= $nav_pages->info->title ?>
  </a>
</header>