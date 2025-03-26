<li class="swiper-slide profile-thumb post-thumb">
  <div class="wrapper">
    <?php if ($person->profile_picture()->isNotEmpty()): ?>
    <figure class="thumb">
       <img class="lazyload" data-src="<?= $person->profile_picture()->toFile()->url() ?>"/>
    </figure>
    <?php else: ?>
    <div class="thumb-placeholder"></div>
    <?php endif ?>
    <div class="content">
      <h3><?= $person->name()?></h3>
      <?php if ($person->role()->isNotEmpty()): ?>
        <div class="role"><?= $person->role() ?></div>
      <?php endif ?>
      <?php if ($person->timespan()->isNotEmpty()): ?>
        <div class="timespan"><?= $person->timespan() ?></div>
      <?php endif ?>
      <?php if ($person->free_text()->isNotEmpty()): ?>
        <p><?= $person->free_text()->kti() ?></p>
      <?php endif ?>
    </div>
  </div>

</li>

