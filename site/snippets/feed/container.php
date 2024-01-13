<section class="feed">
  <button title="toggle feed">
    <div></div>
  </button>
  <?php foreach ($feed_items as $feed_item): ?>
    <?php snippet('feed/item', compact('feed_item')); ?>
  <?php endforeach ?>
</section>