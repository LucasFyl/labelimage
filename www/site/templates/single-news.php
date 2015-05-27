  <?php snippet('header') ?>
  
  <div id="labelnews" class="single">

      <div class="loader">
        <span class="croix spin"></span>
      </div>

      <div class="main-content container">
        
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
  
  <?php snippet('scripts') ?>
  <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
  <script src="<?php echo url('assets/scripts/news.js'); ?>"></script>
