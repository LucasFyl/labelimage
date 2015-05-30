<section class="col-sm-10 col-xs-12 center-block">
  <div class="row">
  <?php foreach(page('news')->children()->visible() as $thenews): ?>
    
    <article class="col-sm-10 col-xs-12 ">
      <div class="row">
  
        <div class="infos col-xs-12 col-sm-8">
          <h3><a href="<?php echo $thenews->url() ?>"><?php echo $thenews->title()->html() ?></a></h3>
          <p><?php echo $thenews->text()->excerpt(350) ?><a href="<?php echo $thenews->url() ?>">read&nbsp;more&nbsp;→</a></p>
        </div>
        
        <div class="thumb col-xs-12 col-sm-4">
          <?php if($image = $thenews->images()->sortBy('sort', 'asc')->first()): ?>
          <a href="<?php echo $thenews->url() ?>">
            <img src="<?php echo $image->url() ?>" alt="<?php echo $thenews->title()->html() ?>">
          </a>
          <?php endif ?>
        </div>
      </div>
    </article>

  <?php endforeach ?>
  </div>
</section>