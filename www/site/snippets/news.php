<ul class="col-sm-10 col-xs-12 center-block">
  <?php foreach(page('news')->children()->visible()->limit(3) as $project): ?>
  
  <li class="col-sm-10 col-xs-12">
    
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    
    <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>

    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>">
    </a>
    
    <?php endif ?>
  
  </li>
  
  <?php endforeach ?>
</ul>
