	<?php snippet('header') ?>
 	
 	<div id="labelnews">

	    <div class="loader">
	      <span class="croix spin"></span>
	    </div>

        <div class="landing">
            <h1 class="text-hide">Label News</h1>
            <div class="background"></div>
        </div>

	    <div class="main-content container">
	    	

			<div class="row">

				<?php snippet('news') ?>	
			
            </div>

	    </div>
	</div>

    <?php snippet('scripts') ?>
    <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/news.js'); ?>"></script>
