	<?php snippet('header') ?>
 	
 	<div id="labelnews">

	    <div class="loader">
	      <span class="croix spin"></span>
	    </div>

        <a href="#" class="arrow-down fadeIn"></a>

        <div class="landing">
            <h1 class="text-hide">Label News</h1>
            <div class="background"></div>
        </div>

	    <div class="main-content container">
	    	
			<?php snippet('news') ?>	
			
	    </div>
	</div>

    <?php snippet('scripts') ?>
    <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/scenes-news.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/news.js'); ?>"></script>
    <script>
    $(document).ready(function(){
		newsController.addScene([
            headerNews,
            backgroundNews,
            headlineNews
        ]);
    });
    </script>