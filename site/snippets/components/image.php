<?php /*
* VARIABLES: ($file, $width, $srcset, $classname, $alt)
*/ ?>
<?php if ($file): ?>
  <?php if ($file->extension() == 'svg'): ?>
    <figure class="svg-wr<?= ($classname) ? ' '.$classname : '' ?>">
      <?= svg($file) ?>
    </figure>
  <?php else: 
    $ratio = convert_ratio($file->ratio());
    $v_padding = 100/$ratio;
    $srcset_fallback = $srcset.'_fallback';
    $sizes = ($width) ? '(min-width: 2000px) ' . ($width*1/5) . 'vw, (min-width: 1600px) ' . $width*1/4 . 'vw, (min-width: 1200px) ' . $width*1/3 . 'vw, (min-width: 800px) ' . $width*1/2 . 'vw, ' . $width . 'vw' :  'auto'; // see config.php for breakpoints and sizes reference level

    if (!$alt) {
      $alt = $site_title;
      $title = $site_title;
    } else {
      $alt = $alt;
      $title = $alt;
    }

    if ($file->extension() == 'gif'): ?>
      <figure
        class="<?= ($classname) ? $classname : '' ?>"
        style="max-width: <?= ($width) ? $width : 100 ?>vw; padding-bottom: <?= $v_padding ?>%;">
        <img 
          class="lazyload"
          style="aspect-ratio:<?= $ratio ?>;"
          src="<?= $file->thumb(['width' => 42])->url() ?>"
          data-src="<?= $file->url() ?>"
          data-ratio="<?= $ratio ?>"
          alt="<?= $alt ?>"
          title="<?= $title ?>">
        <?php if ($caption->isNotEmpty()): ?>
          <figcaption><?= $caption ?></figcaption>
        <?php endif ?>
      </figure>
    <?php else: ?>
      <figure
        class="<?= ($classname) ? $classname : '' ?>"
        style="max-width: <?= ($width) ? $width : 100 ?>vw; padding-bottom: <?= $v_padding ?>%;">
        <picture>
          <source
            data-srcset="<?= $file->srcset($srcset) ?>"
            data-sizes="<?= $sizes ?>"
            type="image/webp">
          <img 
            class="lazyload"
            style="--aspect-ratio: <?= $ratio ?>;"
            src="<?= $file->thumb(['width' => 42, 'blur' => true, 'quality' => 10, 'format' => 'webp'])->url() ?>" <?php // maybe remove default src if dom size gets too heavy ?>
            data-srcset="<?= $file->srcset($srcset_fallback) ?>"
            data-sizes="<?= $sizes ?>"
            data-ratio="<?= $ratio ?>"
            alt="<?= $alt ?>"
            title="<?= $title ?>">
        </picture>
        <?php if ($caption->isNotEmpty()): ?>
          <figcaption><?= $caption ?></figcaption>
        <?php endif ?>
      </figure>
    <?php endif ?>
  <?php endif ?>
<?php else: ?>
  <code>FILE NOT FOUND</code>
<?php endif ?>
