<article>
  <header>
    <h2><?= $feed_item->title() ?></h2>
    <?php if ($feed_item->subheadline()->isNotEmpty()): ?>
      <h3><?= $feed_item->subheadline() ?></h3>
    <?php endif ?>
    <?php if ($feed_item->description()->isNotEmpty()): ?>
      <p><?= $feed_item->description() ?></p>
    <?php else: ?>
      <div></div>
    <?php endif ?>
  </header>
  <?php if ($feed_item->layout()->isNotEmpty()): ?>
    <ol>
      <?php foreach ($feed_item->layout()->toLayouts() as $row): ?>
        <?php foreach ($row->columns() as $column): ?>
          <?php snippet('feed/column', compact('column'))?>
        <?php endforeach ?>
      <?php endforeach ?>
    </ol>
  <?php endif ?>
</article>