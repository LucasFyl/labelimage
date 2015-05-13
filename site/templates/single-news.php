  <?php snippet('header') ?>
  
  <div id="home">

      <div class="loader">
        <span class="croix spin"></span>
      </div>

      <div class="center-block">
        
        <br /><br /><br /><br /><br />
        <h2 class="text-center"><?php echo $page->title(); ?></h2>

        
        <div class="container">
          <h1><?php echo $page->title()->html() ?></h1>

          <ul class="meta cf">
            <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
            <li><b>Tags:</b> <?php echo $page->tags() ?></li>
          </ul>

          <div class="text">
            <?php echo $page->text()->kirbytext() ?>

            <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
            <figure>
              <img style="max-width:1100px;" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
            </figure>
            <?php endforeach ?>
          </div>

          <nav class="nextprev cf" role="navigation">
            <?php if($prev = $page->prevVisible()): ?>
            <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
            <?php endif ?>
            <?php if($next = $page->nextVisible()): ?>
            <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
            <?php endif ?>
          </nav>
        </div>

      </div>
  </div>

  <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- build:js scripts/main.js -->
    <script src="<?php echo url ('assets/scripts/vendor/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/jquery.gsap.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/TweenMax.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/plugins/CSSRulePlugin.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/jquery.ScrollMagic.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/animation.gsap.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js'); ?>"></script>
    <!-- <script src="scripts/chromeSmoothScroll.js"></script>-->
    <script src="<?php echo url('assets/scripts/main.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/prestation.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
