<?php snippet('header') ?>

  <div class="main-wrapper">
    <h1 class="heading heading--main"><?= $pageHeading ?></h1>
    <section class="section-padding">
        
      <ul class="recipes">
        <form class="search">
          <input class="search__input-field" type="search" name="q" value="<?= html($query) ?>">
          <button class="search__submit-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
        
        <?php 
          if($recipes) {
            if(count($recipes) == 0) {
              echo 'geen resultaten';
            }
          }
            foreach ($recipes as $recipe): ?>
            <li >
              <article class="recipe">
                <a href="<?= $recipe->url() ?>">
                  <div class="recipe__info">
                    <h4 class="heading heading--recipe-name ">
                      <?= $recipe->heading()->or($recipe->title()) ?>
                    </h4>
                    <!-- <div class="recipe__detail">
                      <i class="fas fa-utensils"></i>
                      <span class="recipe__detail--dish"><?= $recipe->dish() ?></span>
                    </div>
                    <div class="recipe__detail">
                      <i class="far fa-clock"></i>
                      <?= $recipe->time() ?>
                    </div>
                    <div class="recipe__detail">
                      <i class="fas fa-user-friends"></i>
                      <?= $recipe->serves() ?>
                    </div> -->
                  </div>
                  <div class="recipe__image">
                    <?php 
                      if ($recipe->image()) {
                        echo $recipe->image()->crop(300);
                      } else {
                        echo $site->image()->crop(300);
                      }
                    ?>
                  </div>
                </a>
              </article>
            </li>
            <?php endforeach ?>
          
      </ul>
    </section>
  </div>

  
<?php snippet('footer') ?>