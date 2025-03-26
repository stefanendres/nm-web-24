<?php snippet('head'); ?>
<?php snippet('posts/header'); ?>
<main>
  <?php 
  
  replaceAlgoliaIndex($posts) ?>
  <div class="search-filters is-active">
    <div class="filter" id="filter-tags">
    </div>
  </div>
  <div class="search-box" id="searchbox">
    <div class="search-results" id="searchresults">
    </div>
  </div>
</main>
<?php snippet('footer'); ?>
<?php snippet('foot'); ?>



