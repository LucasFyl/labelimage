<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  
  <script src="<?php echo url('assets/scripts/vendor/modernizr/modernizr.js') ?>"></script>

  <?php echo css('assets/css/style.css') ?>

</head>
<body>
    <header class="hidden-xs hidden-sm">
      <a href="<?php echo url() ?>" class="logo"></a>
      
      <?php snippet('menu') ?>
    </header>

    <header class="hidden-md hidden-lg">
      <?php snippet('mobile-menu') ?>
    </header>