<section class="info">
  <div>
    <?php foreach ($info_page->blocks()->toBlocks() as $block): ?>
      <div class="block block-<?= $block->type() ?>">
        <?php snippet('info/blocks/'.$block->type(), ['content' => $block->content()]) ?>
      </div>
    <?php endforeach ?>
  </div>
</section>