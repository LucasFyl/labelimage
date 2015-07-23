  <?php snippet('header') ?>
  
  <div id="labelnews" class="single">

      <div class="loader">
        <span class="croix spin"></span>
      </div>

      <div class="main-content container">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 title">
              <h1><?php echo $page->title() ?></h1>
              <h2><?php echo $page->title2() ?></h2>
              <h3><?php echo $page->title3() ?></h3>
            </div>
            <article class="col-xs-12 col-sm-6">
              
              <ul class="meta hidden">
                <li><b>Date:</b> 
                    <time datetime="<?php echo $page->date('c') ?>">
                      <?php echo $page->date('d/m/Y') ?>
                    </time>
                </li>
                <li><b>Tags:</b> <?php echo $page->tags() ?></li>
              </ul>

              <div class="text">
                <?php echo $page->text()->kirbytext() ?>
              </div>  

              <div class="bloc-adress">
                <p><?php echo $page->adressBloc()->kirbytext() ?></p>
                <a href="<?php echo $page->adressUrl() ?>"><?php echo $page->adressUrl() ?></a>
              </div>
            </article>

            <div class="col-xs-12 col-sm-6">
              <?php foreach($page->images()->limit(2)->sortBy('sort', 'asc') as $image): ?>
              <figure>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
                <figcaption>
                  <?php echo $image->caption() ?>
                </figcaption>
              </figure>
              <?php endforeach ?>
            </div>

            <div class="col-xs-12 more-img">
              <?php foreach($page->images()->slice(2)->sortBy('sort', 'asc') as $image): ?>
              <figure>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
                <figcaption>
                  <?php echo $image->caption() ?>
                </figcaption>
              </figure>
              <?php endforeach ?>
            </div>
            
            <nav class="nextprev col-xs-12" role="navigation">
              <?php if($prev = $page->prevVisible()): ?>
              <a class="prev col-xs-12 col-sm-6" href="<?php echo $prev->url() ?>">&larr; article précédent</a>
              <?php endif ?>
              <?php if($next = $page->nextVisible()): ?>
              <a class="next col-xs-12 col-sm-6" href="<?php echo $next->url() ?>">article suivant &rarr;</a>
              <?php endif ?>
            </nav>

          </div>
        </div>
      </div>
  </div>
  
  <?php snippet('scripts') ?>
  <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
  <script src="<?php echo url('assets/scripts/news.js'); ?>"></script>
