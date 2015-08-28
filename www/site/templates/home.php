	<?php snippet('header') ?>
 	
 	<div id="home" class="container-fluid">

	    <div class="loader">
	      <span class="croix spin"></span>
	    </div>

        <div class="mobile-placeholder visible-xs">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="hidden">Label Image</h1>
                    <img src="<?php echo url('assets/images/logo-big-bigger.png'); ?> " alt="Label Image">
                </div>
                <div class="col-xs-12">
                    <h2>atelier photographique artisanal de tirages d'exposition</h2>
                    <p>Spécialisé dans la numérisation et le tirage d'exposition,
                    l'atelier est aussi une structure de post production numérique.</p>
                    <span class="stamp-digi"></span>
                </div>
            </div>
        </div>
            
        <div class="landing  hidden-xs">
            <img src="<?php echo url('assets/images/landing-home-full.jpg'); ?>" alt="Pom Pom Mami">

            <div class="bandeau">

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h1 class="hidden">Label Image</h1>
                        <img src="<?php echo url('assets/images/logo-big-bigger.png'); ?> " alt="Label Image">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h2>atelier photographique artisanal de tirages d'exposition</h2>
                        <p>Spécialisé dans la numérisation et le tirage d'exposition,
                        l'atelier est aussi une structure de post production numérique.</p>
                        <span class="stamp-digi"></span>
                    </div>
                </div>
            </div>
        </div>

        

	    <div class="main-content hidden-xs">
            <div class="bottom-part">
                <h3>nos prestations</h3>
                <img src="<?php echo url('assets/images/landing-home-orange.jpg'); ?> " alt="boots">
            </div>

            <div class="row prestations">
                <div class="bg-wrap">
                    <img src="<?php echo url('assets/images/asset-bg-home-presta.jpg') ?>" alt="#" id="bg-img">
                </div>

                <div class="content-wrap">
                    <div class="col-xs-4 col-sm-2">
                        <div class="overlay"></div>
                        <a href="<?php echo url('prestations/scan'); ?>" data-letters="Scan">
                            <span>Scan</span>
                        </a> 
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <div class="overlay"></div>
                        <a href="<?php echo url('prestations/traitement'); ?>" data-letters="Traitement">
                            <span>Traitement</span>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <div class="overlay"></div>
                        <a href="<?php echo url('prestations/tirages'); ?>" data-letters="Tirages">
                            <span>Tirages</span>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="overlay"></div>
                        <a href="<?php echo url('prestations/finitions'); ?>" data-letters="Finitions">
                            <span>Finitions</span>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="overlay"></div>
                        <a href="<?php echo url('tarifs'); ?>" data-letters="Tarifs">
                            <span>Tarifs</span>
                        </a>
                    </div>

                    <div class="row footer-part">
                        <div class="col-sm-3 cta-btn">
                            <a href="mailto:delphine@atelierlabelimage.com"></a>
                            <a href="https://www.facebook.com/pages/Atelier-Label-Image/253768198027539"></a>
                        </div>
                        <div class="col-sm-6">
                            <p> © COPYRIGHT 2015 ATELIER LABEL IMAGE <span class="o-b"></span> <span> 01 43 38 03 01 </span> <span class="o-b"></span> <a href="http://lucasfayolle.com" target='_blank'>DESIGN ET DEVELOPPEMENT FAYOLLE</a>  </p>
                        </div>
                        <div class="col-sm-3 pdf">
                            <a href="<?php echo $pages->find('tarifs')->file('tarifs.pdf')->url() ?>" target="_blank">Tarifs PDF</a>
                        </div>
                    </div>
                </div>

            </div>

                
	    </div>

	</div>

    <?php snippet('scripts') ?>
    <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/plugins/ScrollToPlugin.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/home.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/home-bg.js'); ?>"></script>
    
    <script>
        homeController.addScene([
            headerHome,
            prestaPart
        ]);
        $(document).ready(function(){
            TweenMax.set('#mobile-menu .logo', {visibility:'hidden', opacity:0});
            TweenMax.to('header.mobile', 0.25, {top:'0 !important',zIndex:'99999',delay:2.5,ease:Power2.easeOut});
            $('body').on({
                'touchmove': function(e) { 
                    e.preventDefault();
                    TweenMax.to('header.mobile', 0.25, {top:0,delay:0.25,ease:Power2.easeOut});
                }
            });
        });

    </script>
    