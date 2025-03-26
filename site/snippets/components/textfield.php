<?php if ($text_content->isNotEmpty()): ?>
  <div class="textfield-cr observe-vp">
    <div class="text-wr">
      <p>
        <?= $text_content->kti() ?>
      </p>
    </div>
    <?php if ($ui_text): // ui_text = NULL disables more/less-buttons ?>
      <div class="btns-cr">
        <button class="btn btn-more"><?= $ui_text->read_more_text() ?></button>
        <button class="btn btn-less"><?= $ui_text->read_less_text() ?></button>
      </div>
    <?php endif ?>
  </div>
<?php endif ?>
