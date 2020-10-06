<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <!-- <?= css('assets/css/styles.css') ?> -->
  <script src="https://kit.fontawesome.com/9348461e93.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>  
  <header class="header">
    <div class="main-wrapper">
      <div class="header-content">
        <?php
            if ($page->parent()) {
              if ($page->parent()->title() == "Recepten") {
                $recept = true;
              } else {$recept = false;}
            }
            if ($page->title() == "Over Mij" || $recept) { ?>   
              <a href="<?= $site->url() ?>" class="logo logo--small">   
                  <div class="logo__image logo__image--small">
                  <?= $site->image('logo.png') ?>
                  </div>
                  <h3 class="heading heading__logo heading__logo--small"><?= $site->title() ?></h3>
              </a>
            <?php } else {?>
          <a href="<?= $site->url() ?>" class="logo">
            <h3 class="heading heading__logo"><?= $site->title() ?></h3>
            <div class="logo__image">
              <?= $site->image('logo.png') ?>
            </div>
          </a>
          <?php } ?>
          <nav class="main-menu">
            <?php foreach ($site->children()->listed() as $subpage): ?>
              <?php if ($subpage->title() == "Recepten") { ?>
                <li class="main-menu__item <?php e($subpage->isActive() or $subpage->isAncestorOf($page), 'active') ?>">
                  <p>
                    <a href="<?= $subpage->url() ?>"><?= $subpage->title()?></a> <i class="fas fa-chevron-down grey-text expand-recipe-icon"></i>
                  </p>
                  <div class="sub-menu-container">
                    <ul class="sub-menu sub-menu--dish">
                      <p class="sub-menu__title"><em>Soort</em></p>
                      <?php foreach($recipeMenuDishes as $item): ?>
                      <li class="sub-menu__item">
                          <a href="<?= url('recepten', ['params' => ['gerecht' => $item]]) ?>"><?= $item ?></a>
                      </li>
                      <?php endforeach ?>
                    </ul>
                    <ul class="sub-menu sub-menu--categories">
                      <p class="sub-menu__title"><em>Categorie</em></p>
                      <?php foreach($recipeMenuCategories as $item): ?>
                      <li class="sub-menu__item">
                          <a href="<?= url('recepten', ['params' => ['categorie' => $item]]) ?>"><?= html($item) ?></a>
                      </li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                  
                </li>
      
              <?php } elseif ($subpage->title() == "Schrijfsels") { 
                if($subpage->hasListedChildren()) {?>
                  <li class="main-menu__item <?php e($subpage->isAncestorOf($page), 'active') ?>">
                    <p>
                      <?= $subpage->title() ?> 
                      <i class="fas fa-chevron-down grey-text expand-writings-icon"></i>
                    </p>
                    <ul class="sub-menu sub-menu--schrijfsels">
                      <?php foreach ($subpage->children()->listed() as $article): ?>
                        <li class="sub-menu__item"><a href="<?= $article->url() ?>"><?= $article->heading() ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
      
              <?php } } else { ?>
                <li class="main-menu__item <?php e($subpage->isActive(), 'active') ?>"><a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a></li>
              <?php } ?>
      
            <?php endforeach ?>
            <!-- <li class="main-menu__item"><a href="mailto:arabab@xs4all.nl">Contact</a></li> -->
          </nav>
        <div class="mobile-menu-icon">
          <div class="mobile-menu-icon__bars"></div>
        </div>  
      </div>
    </div>
  </header>
<main>      