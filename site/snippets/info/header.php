<header class="main">
  <a class="page <?= $nav_pages->posts->slug ?>" href="<?= $nav_pages->posts->url ?>">
    <div class="icon">
      <?= svg('static/images/search-white.svg') ?>
    </div> 
    <div class="title">Search</div>
  </a>
  <a class="site-title" href="<?= $site->url() ?>">
    <?= $site->title() ?>
  </a>
  <button class="back" onclick="history.back()">
    <div class="title">Back</div>
  </button>
</header>