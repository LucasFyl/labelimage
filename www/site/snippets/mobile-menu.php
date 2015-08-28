<div id="mobile-menu">
  
  <div class="absolute-wrap">
    <a href="<?php echo $site->url() ?>" class="logo"></a>
    <a href="#" class="trigger"><i class="fa fa-bars fa-2x"></i></a>  
  </div>
    

  <nav>
    <ul class="row">
      <li class='anim-from-bottom col-sm-6'>
        <a href="<?php echo $site->url();  ?>">Accueil</a>
        <span></span>
      </li>
      
      <?php foreach($pages->visible() as $p): ?>
      <li <?php e($p->isOpen(), ' class="active anim-from-bottom"') ?> class='anim-from-bottom'>
        <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
      <?php endforeach ?>
      <li class="col-sm-12"><a href="#" class="close-menu"><i class="fa fa-times fa-2x"></i> Fermer le menu</a></li>
    </ul>
  </nav>

</div>

  