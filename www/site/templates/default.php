	<?php snippet('header') ?>
 	
 	<div id="home">

	    <div class="loader">
	      <span class="croix spin"></span>
	    </div>

	    <div class="center-block">
	    	
	    	<br /><br /><br /><br /><br />
	    	<h2 class="text-center" style="letter-spacing:4px;"><?php echo $page->title(); ?></h2>
	    </div>
	</div>


    <?php snippet('scripts') ?>
    <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/home.js'); ?>"></script>