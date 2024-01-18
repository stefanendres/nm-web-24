<?php snippet('head'); ?>
<main>
  <h2 class="headline">
    <?php echo $page->about_headline() ?>
  </h2>
  <div class="textfield">
    <?php echo $page->about_text() ?>
  </div>


  <ul>
    <?php foreach($page->teaching_staff()->toStructure() as $list_element): ?>
      <li>
        <?php if ($list_element->profile_picture()->isNotEmpty()) : ?>
          <img class="profile-picture" src="<?php echo $list_element->profile_picture()->toFile()->url() ?>"/>
        <?php endif ?>
        <div><?= $list_element->name() ?></div>
        <div><?= $list_element->role() ?></div>
      </li>
    <?php endforeach ?>
  </ul>



</main>
<?php snippet('foot'); ?>
