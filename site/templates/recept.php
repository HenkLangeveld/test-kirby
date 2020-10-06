<?php snippet('header') ?>
<section>
    <div class="banner banner--recipe">
      <div class="banner__image banner__image--recipe">
        <img src="<?= $image->url() ?>" 
            srcset="<?= $image->srcset([
              250,
              500,
              1024
            ]) ?>"
            alt=""
          >
      </div>

      <div class="main-wrapper">
        <div class="banner-content">
          <div class="banner__insert banner__insert--recipe">
            <?= $image->crop(300) ?>
          </div>
          <h1 class="heading heading--main heading--main-banner heading--white banner__text"><?= $page->heading()->or($page->title()) ?></h1>
          <div class="banner__tags">
            <?php foreach ($page->categories()->split() as $category): ?>
              <p class="information__tags"><a href="<?= url('recepten', ['params' => ['categorie' => $category]]) ?>"><?= $category ?></a></p>
            <?php endforeach ?>
          </div>
          <div class="banner--recipe-info">
            <p class="information__foto-info"><span class="information__foto-text"><i class="far fa-clock"></i> <?= $page->time() ?> min.</span> 
            <?php if ($page->serves()->value() != NULL) { ?>
                <span class="information__foto-text"><i class="fas fa-user-friends"></i> <?= $page->serves() ?></span>
              <?php } ?>
          </p>

          </div>
        </div>
      </div>
      
    </div>
</section>

<div class="main-wrapper">
  <section class="information section-padding">
    <div class="information__text">
      <div class="information__description"><?= $page->description()->kirbytext() ?></div>
      <?php if($page->placement() == '1') { ?>
        <div class="pepper pepper--1">
          <?= $site->image('redpepper.png') ?>
        </div>
      <?php } else { ?>
        <div></div>
      <?php } ?>
      <div class="topline">
        <button class="button button--back">
          &larr; terug
        </button>
        <!-- <p class="cook-mode">
          <span class="cook-mode__title">kook modus</span> 
          <span class="cook-mode__button cook-mode__button--on">aan</span><span class="cook-mode__button cook-mode__button--off">uit</span>
        </p> -->
      </div>
    </div>
  </section>
  
  <section class="instructions section-padding">
    <div class="ingredients">
      <h3 class="sub-heading">Ingrediënten</h3>
      <?= $page->ingredients()->kirbytext() ?>
      <?php if($page->placement() == '2') { ?>
        <div class="pepper pepper--2">
          <?= $site->image('redpepper.png') ?>
        </div>
      <?php } ?>
    </div>
    <div class="instructions__text">
    <?php if($page->placement() == '3') { ?>
        <div class="pepper pepper--3">
          <?= $site->image('redpepper.png') ?>
        </div>
      <?php } ?>
      <h3 class="sub-heading">Bereiding</h3>
      <?= $page->instructions()->kirbytext() ?>
    </div>
  </section>
</div>


<?php snippet('footer') ?>