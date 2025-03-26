<?php foreach ($blocks as $block): ?>            
  <?php if (!$block->isHidden()) : ?>

    <?php if ($block->classname()->isNotEmpty() || $block->v_align()->isNotEmpty()): ?>
      <div class="<?= $block->classname() ?><?= e($block->classname()->isNotEmpty() && $block->v_align()->isNotEmpty(), ' ', '') ?><?= e($block->v_align()->isNotEmpty(), 'v-align v-align-'.$block->v_align(), '') ?>">
    <?php endif ?>

    <?php if ($block->type() == 'heading'): ?>
      <?php snippet('blocks/heading', ['block' => $block ]) ?>
    <?php endif ?>

    <?php if ($block->type() == 'text' && $block->text()->isNotEmpty()): ?>
      <?php snippet('components/text', ['content' => $block->text() ]) ?>
    <?php endif ?>

    <?php if ($block->type() == 'image'): ?>
      <?php snippet('components/image', [
        'file' => $block->image()->toFile(),
        'width' => $width,
        'srcset' => 'image_'.$width,
        'link' => $block->link_object(),
        'classname' => NULL,
        'alt' => $block->alt(),
        'caption' => $block->caption()
      ]); ?>
    <?php endif ?>

    <?php if ($block->type() == 'gallery'): ?>
      <?php snippet('components/slider', ['block' => $block, 'width' => $width]) ?>
    <?php endif ?>
    
    <?php if ($block->type() == 'embed'): ?>
      <?php /* TODO check if js HTML Iframe injection is needed (update plugin embed snippet tho) */ ?>
      <?php snippet('blocks/embed', ['block' => $block]) ?>
    <?php endif ?>

    <?php if ($block->type() == 'code'): ?>
      <?php snippet('blocks/code', ['block' => $block]) ?>
    <?php endif ?>

    <?php if ($block->classname()->isNotEmpty() || $block->v_align()->isNotEmpty()): ?>
      </div>
    <?php endif ?>

  <?php endif ?>
<?php endforeach ?>