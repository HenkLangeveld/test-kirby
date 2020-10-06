<?php snippet('header') ?>
  <div class="main-wrapper">
    <h1 class="heading heading--main"><?= $site->title() ?></h1>
    <div class="home-content section-padding">
      <section class="home-content__recipes">
        <?php 
          $siblings = $page->siblings();
          foreach($siblings as $sibling):
        ?>
          <?php 
            if($sibling->title()->html() == "Recepten") {
              $photoNumber = 1;
              foreach($sibling->children()->listed()->flip()->limit(4) as $recipe):
            ?>
            <a href="<?= $recipe->url() ?>" class="photo photo<?= $photoNumber ?>" ?>
              <div class="photo__info">
                <p class="photo__info-order">Laatst toegevoegd</p>
                <h3 class="heading heading--in-photo"><?= $recipe->heading()->or($recipe->title()) ?></h3>
              </div>
              <div class="photo__image"><?php 
                if ($recipe->image()) {
                  echo $recipe->image()->crop(300);
                } else {
                  echo $site->image()->crop(300);
                }
              ?></div>
            </a>
            <?php 
              $photoNumber++;
              endforeach; } 
          ?>
        <?php endforeach ?>
      </section>
      <aside class="home-content__info">
        <?= $page->image() ?>
        <h2 class="heading"><?= $page->headline()?></h2>
        <p class="intro-text">
          <?= $page->text()->kirbytext() ?>
        </p>
    
      </aside>
    </div>
  </div>
  

<?php snippet('footer') ?>