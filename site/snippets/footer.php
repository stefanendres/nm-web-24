<footer>
  <div>
    <p>©<?= date("Y") ?> <?= $site->title() ?></p>
  </div>
  <nav>
    <?php if ($pages->template('legal')->listed()): ?>
      <ol>
        <?php foreach ($pages->template('legal') as $page) : ?>
          <li>
            <a href="<?= $page->url() ?>"><?= $page->title() ?></a>
          </li>
        <?php endforeach ?>
      </ol>
    <?php endif ?>
  </nav>
</footer>
