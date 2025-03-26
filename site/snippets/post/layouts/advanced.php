<div class="layout layout-advanced">
  <?php foreach ($content as $row): ?>
    <div class="row">
      <?php foreach ($row->columns() as $column): ?>
        <?php
          if ($column->width() == '1/1') { $width = 100; }
          if ($column->width() == '2/3') { $width = 66.666; }
          if ($column->width() == '1/2') { $width = 50; }
          if ($column->width() == '1/3') { $width = 33.333; }
          if ($column->width() == '1/4') { $width = 25; }
        ?>
        <div class="column width-<?= floor($width) ?><?= e($column->blocks()->isEmpty(), ' is-empty', '') ?>">
          <?php snippet('post/blocks', ['blocks' => $column->blocks(), 'width' => $width]) ?>
        </div>
      <?php endforeach ?>
    </div>
  <?php endforeach ?>
</div>