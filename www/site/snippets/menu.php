  <nav>
    <ul>
    <li class='anim-from-bottom'>
      <a href="<?php echo url();  ?>">Accueil</a>
      <span></span>
    </li>
    <?php foreach($pages->visible() as $p): ?>
    <li <?php e($p->isOpen(), ' class="active anim-from-bottom"') ?> class='anim-from-bottom'>
      <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <!--<?php if($p->hasVisibleChildren()): ?>
      <ul>
        <?php foreach($p->children()->visible() as $p): ?>
        <li class="anim-from-bottom">
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>-->
      
      <span></span>
    </li>
    <?php endforeach ?>
  </ul>
</nav>