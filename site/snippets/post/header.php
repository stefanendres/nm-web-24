<header class="post">
  <button class="back" onclick="history.back()">
    <div class="title">Back</div>
  </button>
  <a class="site-title" href="<?= $site->url() ?>">
    <?= $site->title() ?>
  </a>
  <button class="more">
    <div class="title">More</div>
    <div class="icon">
      <?= svg('static/images/add-white.svg') ?>
    </div>
  </button>
</header>