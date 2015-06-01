	<?php snippet('header') ?>
 	
 	<div id="home" class="container-fluid">

	    <div class="loader">
	      <span class="croix spin"></span>
	    </div>

        <div class="landing">
            <div class="background"></div>
            <div id="trigger2"></div>
            <div id="trigger3"></div>
        </div>

        <div class="bandeau">
            <div id="trigger"></div>

            <div class="row">
                <div class="col-xs-6">
                    <h1 class="hidden">Label Image</h1>
                </div>
                <div class="col-xs-6">
                    <h2>atelier photographique artisanal de tirages d'exposition</h2>
                    <p>Spécialisé dans le tirage noir et blanc et le tirage Fine Art, <br />
                    l'atelier est aussi une structure de post production numérique.</p>
                    <span class="stamp-digi"></span>
                </div>
            </div>
        </div>

	    <div class="main-content">

            <div class="row prestations">

                <h3>nos préstations</h3>
                <div class="col-xs-4 col-sm-2">
                    <a href="<?php echo url('prestations/scan'); ?>" data-letters="Scan">
                        <span>Scan</span>
                    </a> 
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="<?php echo url('prestations/traitement'); ?>" data-letters="Traitement">
                        <span>Traitement</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="<?php echo url('prestations/tirages'); ?>" data-letters="Tirages">
                        <span>Tirages</span>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="<?php echo url('prestations/finitions'); ?>" data-letters="Finitions">
                        <span>Finitions</span>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="<?php echo url('prestations/tarifs'); ?>" data-letters="Tarifs">
                        <span>Tarifs</span>
                    </a>
                </div>

            </div>

            <div class="row footer-part">
                <div class="col-sm-3 cta-btn">
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
                <div class="col-sm-6">
                    <p> © COPYRIGHT 2015 ATELIER LABEL IMAGE <span class="o-b"></span> <span> 01 43 38 03 01 </span> <span class="o-b"></span> DESIGN ET DEVELOPPEMENT FAYOLLE  </p>
                </div>
                <div class="col-sm-3 pdf">
                    <a href="#">Tarifs PDF</a>
                </div>
            </div>

	    </div>

	</div>

    <?php snippet('scripts') ?>
    <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/home.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/scenes-home.js'); ?>"></script>
    <script>
        homeController.addScene([
            headerHome,
            firstPart,
            secondPart
        ]);
    </script>