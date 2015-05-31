<section class="col-sm-10 col-xs-12 center-block">
  <div class="row">
  <?php foreach(page('news')->children()->visible() as $thenews): ?>
    
    <article class="col-xs-12 anews">
      <div class="row">
  
        <div class="infos col-sm-12 col-md-7">
          <h2 class="h1"><a href="<?php echo $thenews->url() ?>"><?php echo $thenews->title()->html() ?></a></h2>
          <h3 class="h2"><a href="<?php echo $thenews->url() ?>"><?php echo $thenews->title2()->html() ?></a></h3>
          <h4 class="h3"><a href="<?php echo $thenews->url() ?>"><?php echo $thenews->title3()->html() ?></a></h4>
          <p><?php echo $thenews->text()->excerpt(250) ?></p>
          <a class="h3" href="<?php echo $thenews->url() ?>">Suite de l'article&nbsp;→</a>
        </div>
        
        <div class="thumb col-sm-12 col-md-5">
          <?php if($image = $thenews->images()->sortBy('sort', 'asc')->first()): ?>
          <figure>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
                <figcaption>
                  <?php echo $image->caption() ?>
                </figcaption>
              </figure>
          <?php endif ?>
        </div>
      </div>
    </article>

  <?php endforeach ?>
  </div>
</section>