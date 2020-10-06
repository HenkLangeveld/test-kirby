<?php snippet('header') ?>
  <section class="about">
    <div class="banner">
      <div class="banner__image">
        <img src="<?= $page->image('background.jpg')->url() ?>" 
          srcset="<?= $page->image('background.jpg')->srcset([
            250,
            500,
            1024
          ]) ?>"
          alt=""
        >
      </div>

      <div class="main-wrapper section-padding">
        <div class="banner-content">
          <div class="banner__insert banner__insert--about">
            <?= $page->image('profile.jpeg')->crop(300) ?>
          </div>
          <h1 class="heading heading--main heading--white banner__text"><?= $page->heading()->or($page->title()) ?></h1>
        </div>
      </div>
    </div>

    <div class="main-wrapper section-padding">
      <article class="basic-article">
        <div class="basic-article__content">
          <?= $page->text()->kirbytext() ?>
        </div>
        <div class="basic-article__images">
          <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <?php if($image->contentFileName() != "profile.jpeg" && $image->contentFileName() != "background.jpg") echo($image->crop(500, 350))?>
          <?php endforeach ?>
          
        </div>
      </article>
    </div>
  </section>

<?php snippet('footer') ?>