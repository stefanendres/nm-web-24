<div class="layout layout-advanced">
  <?php foreach ($content as $row): ?>
    <div class="row">
      <?php foreach ($row->columns() as $column): ?>
        <?php
          if ($column->width() == '1/1') { $width = 100; }
          if ($column->width() == '2/3') { $width = 66; }
          if ($column->width() == '1/2') { $width = 50; }
          if ($column->width() == '1/3') { $width = 33; }
        ?>
        <div class="column width-<?= $width ?>">
          <?php snippet('layouts/blocks', ['blocks' => $column->blocks(), 'width' => $width]) ?>
        </div>
      <?php endforeach ?>
    </div>
  <?php endforeach ?>
</div>