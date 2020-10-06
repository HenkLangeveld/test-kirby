<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <!-- <?= css('assets/css/styles.css') ?> -->
  <script src="https://kit.fontawesome.com/9348461e93.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>  
<div class="error-container">
  <div class="error-image">
    <?= $page->image() ?>
    <h1 class="heading error-heading text-shadow">404</h1>
  </div>
  <div class="error-message"><?= $page->text()->kirbytext() ?></div>
  <a class="error__home-link" href="<?= $site->url() ?>">Terug naar Home</a>
</div>
<script src="/assets/bundled.js"></script>
</body>
</html>