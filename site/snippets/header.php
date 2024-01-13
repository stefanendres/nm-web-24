<header>
  <a class="site-logo-cr link-<?= $home_page_data->slug ?>" href="<?= $home_page_data->url ?>">
    <span style="color:transparent;position:absolute;pointer-events:none;"><?= $home_page_data->title ?></span>
    <?= setup_element_from_file($globals->site_logo()->toFile(), 30, 'site-logo', $home_page_data->title) ?>
  </a>
  <nav>
    <ol>
      <?php foreach($globals->main_menu()->toPages()->listed() as $page): ?>
        <li class="nav-item-<?= $page->intendedTemplate() ?>">
          <a class="link-internal link-<?= $page->intendedTemplate() ?><?php e($page->isOpen(), ' is-active') ?>" href="<?= $page->url() ?>">
            <?= $page->title() ?>
          </a>
        </li>
      <?php endforeach ?>
    </ol>
  </nav>
  <button class="btn-menu" aria-label="Menu">
    <span></span>
    <span></span>
    <span></span>
  </button>
</header>
<button class="btn-scrolltop btn-scrolltop-mobile">↑</button>
