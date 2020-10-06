<?php snippet('header') ?>
<section class="about">
    <div class="banner">
      <div class="banner__image">
        <img src="<?= $site->image()->url() ?>" 
          srcset="<?= $site->image()->srcset([
            250,
            500,
            1024
          ]) ?>"
          alt=""
        >
      </div>
      <div class="main-wrapper section-padding verticle-center-wrapper">
        <h1 class="heading heading--main heading--white banner__text"><?= $page->heading()->or($page->title()) ?></h1>
      </div>
    </div>
  </section>

  <div class="main-wrapper">
    <article class="basic-article section-padding">
      <div class="basic-article__content">
        <?= $page->text()->kirbytext() ?>

          <div class="basic-article__content-pagination">
            <?php if ($page->hasPrevListed()) { ?>
              <button class="button button--pagination button--pagination-previous">
                <a href="<?= $page->prevListed()->url() ?>">&larr; vorig schrijfsel</a>
              </button>
            <?php ;} ?>
            <?php if ($page->hasNextListed()) { ?>
              <button class="button button--pagination button--pagination-next">
                <a href="<?= $page->nextListed()->url() ?>">volgend schrijfsel &rarr;</a>
              </button>
            <?php ;} ?>
          </div>
      </div>
      <div class="basic-article__images">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <?= $image->crop(500, 350) ?>
        <?php endforeach ?>
        
      </div>
    </article>
  </div>
<?php snippet('footer') ?>