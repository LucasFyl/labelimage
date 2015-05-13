<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  
  <script src="<?php echo url('assets/scripts/vendor/modernizr/modernizr.js') ?>"></script>

  <?php snippet('less') ?>

</head>
<body>
    <header>
      <a href="<?php echo url() ?>" class="logo fadeIn"></a>
      
      <?php snippet('menu') ?>
    </header>