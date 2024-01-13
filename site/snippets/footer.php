<footer>
  <div class="credits-cr">
    <p>©<?= date("Y") ?> <?= $site->title() ?></p>
    <p>Website by <a class="link link-credits" href="https://stefanendres.com" target="_blank" rel="noopener noreferrer">stefanendres.com</a></p>
  </div>
  <nav class="nav-internal">
    <ol class="nav-list nav-list-internal">
      <?php if (!$info_page_data->active): ?>
        <?php if (isset($contact_page_data)): ?>
          <li class="nav-item nav-item-internal nav-item-<?= $contact_page_data->slug ?>">
            <a class="link link-internal link-contact" href="<?= $info_page_data->url.'#'.$contact_page_data->slug ?>">
              <?= $contact_page_data->title ?>
            </a>
          </li>
        <?php endif ?>
        <?php if (isset($press_page_data)): ?>
          <li class="nav-item nav-item-internal nav-item-<?= $press_page_data->slug ?>">
            <a class="link link-internal link-press" href="<?= $info_page_data->url.'#'.$press_page_data->slug ?>">
              <?= $press_page_data->title ?>
            </a>
          </li>
        <?php endif ?>
      <?php endif ?>
      <?php foreach($site->children()->listed()->template('legal') as $page): ?>
        <li class="nav-item nav-item-internal nav-item-<?= $page->intendedTemplate() ?>">
          <a class="link link-internal link-<?= $page->intendedTemplate() ?>" href="<?= $page->url() ?>">
            <?= $page->title() ?>
          </a>
        </li>
      <?php endforeach ?>
    </ol>
  </nav>
</footer>
