	<?php snippet('header') ?>
 	
 	<div id="contact">

	    <div class="loader">
	       <span class="croix spin"></span>
	    </div>


        <div class="landing">
            <h1 class="fadeIn">contact</h1>
            <div class="background"></div>
            <!-- <img src="<?php echo url('assets/images/landing-contact.jpg'); ?>" alt="Contact" class="background"/> 
            <img src="<?php echo url('assets/images/landing-contact.jpg'); ?>" alt="Contact" class="background fixed"/>  -->
        </div>
        
        <div id="trigger"></div>
        <div id="trigger2"></div>
        <div id="trigger3"></div>
        
        <div class="main-content" id="">
            <section class="container">
                <div class="center-block col-xs-10 col-sm-8">
                    <div class="left col-xs-12 col-sm-6">
                        <h2 class="text-hide">
                            Ateliers Label Image
                            <img src="<?php echo url('assets/images/logo-bigger.png')  ?>" alt="Ateliers Label Image"/>
                        </h2>
                    </div>
                    <div class="right address-block col-xs-12 col-sm-6">
                        <h2>121, Rue de Charonne 75011 Paris</h2>
                        <p>Du lundi au vendredi de 10h à 19h</p>
                        <p>+33 (0)1 43 38 03 01</p>
                        <a href="mailto:delphine@atelierlabelimage.com">delphine@atelierlabelimage.com</a>
                    </div> 
                    <div class="col-xs-12 col-sm-6"></div>
                    <div class="cta-btn col-xs-12 col-sm-6">
                        <a href="mailto:delphine@atelierlabelimage.com"></a>
                        <a href="https://www.facebook.com/pages/Atelier-Label-Image/253768198027539" target="_blank"></a>
                    </div>
                </div>
            </section>
            <section class="map">
                <a href="http://www.google.com/maps?q=labelimage(LabelImage/Ateliers LabelImage)" target="_blank">
                    <img src="<?php echo url('assets/images/asset-map.jpg') ?>" alt="121 rue de Charonne 75011 Paris" />
                </a>
            </section>
            <section class="footer container">

                <span class="heading"><p>&nbsp;atelier <span>label image</span>&nbsp;</p></span>
                <div class="row">
                    <p class="thanks col-xs-12">MERCI AUX PHOTOGRAPHES&nbsp;&nbsp;&nbsp;OLIVIA GAY&nbsp;&nbsp;&nbsp;PHILIPPE MARINIG&nbsp;&nbsp;&nbsp;ERIC FAYOLLE&nbsp;&nbsp;&nbsp;MARIE HUDELOT&nbsp;&nbsp;&nbsp;SABINE DELCOUR&nbsp;&nbsp;&nbsp;ELENE USDIN&nbsp;&nbsp;&nbsp;TODD ANTONY&nbsp;&nbsp;&nbsp;DE NOUS AVOIR PERMIS D’ILLUSTRER LE SITE</p>
                    <div class="col-sm-3 col-xs-6">
                        <ul>
                            <li>Partenaires</li>
                            <li><a href="http://www.lucasdolega.com/" target="_blank">Association Luca Dolega</a></li>
                            <li><a href="http://www.imagesingulieres.com/" target="_blank">Images singulières</a></li>
                            <li><a href="http://www.jrm-studio.com/" target="_blank">JRM</a></li>
                            <li><a href="http://www.ateliermartial.net/" target="_blank">Atelier Martial</a></li>
                            <li><a href="http://plasticollage.com/" target="_blank">Plasticollage</a></li>
                            <li><a href="http://www.image-collee.com/" target="_blank">Image Collée</a></li>
                            <li><a href="http://www.encadrement-flamant.com/" target="_blank">Flamant encadrement</a></li>
                            <li><a href="https://plus.google.com/118051252642417748773/about?gl=de&hl=fr" target="_blank">Zanzibar</a></li>
                        </ul>
                    </div>                    
                    <div class="col-sm-3 col-xs-6">
                        <ul>
                            <li>Écoles</li>
                            <li><a href="http://ce3p.com/" target="_blank">CE3P</a></li>
                            <li><a href="http://www.ensad.fr/" target="_blank">ENSAD</a></li>
                            <li><a href="http://www.gobelins.fr/" target="_blank">Les Gobelins</a></li>
                            <li><a href="http://www.efet.fr/" target="_blank">Efet</a></li>
                            <li><a href="http://www.ens-louis-lumiere.fr/" target="_blank">Louis Lumière</a></li>
                            <li><a href="http://www.lycee-brassai.fr/" target="_blank">Lycée Brassai</a></li>
                            <li><a href="http://www.etpa.com/index.html" target="_blank">ETPA</a></li>
                        </ul>
                        <div class="cta-btn">
                            <a href="mailto:delphine@atelierlabelimage.com"></a>
                            <a href="https://www.facebook.com/pages/Atelier-Label-Image/253768198027539" target="_blank"></a>
                        </div>
                    </div>                    
                    <div class="col-sm-6 col-xs-12">
                        <p class="hide">Fet Art</p>
                        <p class="hide">Circulation(s)</p>
                        <p class="hide">Digigraphie by epson</p>
                        <p class="hide">Certified Studio for Digital fine art printing</p>
                    </div>
                </div>
                <span class="heading"><p>&nbsp;© copyright 2015 atelier label image <span class="o-b"></span> design et developpement fayolle <span class="o-b"></span> <a href="#">Mentions Légales</a> <span class="o-b"></span>&nbsp;</p></span>
            </section>
        </div>
	</div>

	<?php snippet('scripts'); ?>
    <script src="<?php echo url('assets/scripts/contact.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/scenes-contact.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
    <script>
        $(document).ready(function(){
            contactController.addScene([
                headerContact,
                backgroundContact,
                headlineContact
            ]);
        });
    </script>