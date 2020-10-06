<?php snippet('header') ?>
  <div class="main-wrapper">
    <h1 class="heading heading--main"><?= $page->title() ?></h1>
    <p><?= $page->text()->kirbytext() ?></p>
    <?= $page->image() ?>
  </div>
<?php snippet('footer') ?>