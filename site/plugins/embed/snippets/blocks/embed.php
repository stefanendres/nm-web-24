<div class="embed"
<?php if ($block->ratio()->isNotEmpty()): ?>
  style="padding-top: calc(100% / (<?= $block->ratio(); ?>));"
  data-ratio="<?= $block->ratio(); ?>"
<?php endif ?>
  data-html="<?= ''.$block->code()->html().''; ?>">
</div>
