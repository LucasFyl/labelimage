

	<?php snippet('header') ?>
 	<div id="prestation" class="traitement">

    <div class="loader">
      <span class="croix spin"></span>
    </div>

    <!-- <div id="main"> -->
      <a href="#" class="arrow-down fadeIn"></a>

      <div class="landing">
        <h1 class="fadeIn">traitement</h1>
        <img src="<?php echo url('assets/images/landing-traitement.jpg'); ?>" alt="" class="background"/> 
      </div>
      
      <div id="trigger"></div>
      <div id="trigger2"></div>
      <div id="trigger3"></div>
      
      <div class="main-content" id="custom-grid-container">
          <div class="custom-grid-part left first">
            <h3>Traitement numerique</h3>
            <h4>Nous effectuons de multiples operations </h4>
            <h4>afin d’optimiser vos fichiers et obtenir le meilleur de vos images</h4>
            <p class="bold">Développement de vos fichiers Raw<br/>
            Mise au point de la chromie et de la densité, nettoyage, et recadrage<br/>
            Nous adaptons le fichier à l'espace couleur de votre choix, RVB ou CMJN<br/>
            Pour l'espace CMJN, nous proposons une épreuve numérique de contrôle certifiée Fogra, réalisée sur un Epson Stylus Pro 3880.</p>
            <p>La simulation Fogra 39 est la plus utilisée dans l'échange d'épreuve contratuelle<br>Elle est le reflet d'une impression sur un papier couché mat/brillant sur une presse Offset calibrée suivant la norme ISO 12647-2</p>
          </div>
          <div class="custom-grid-part right">
            <div class="h2-bloc">
                <h2>Optimiser</h2>
                <h2>vos fichiers</h2>
            </div>  
            <div class="asset-bg">
              <img src="<?php echo url('assets/images/asset-stylet.png'); ?>" class='stylet' alt="Traitement Numérique">
            </div>
          </div>
      </div>
    <!-- </div> -->
  </div>
  

    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- build:js scripts/main.js -->
    <script src="<?php echo url ('assets/scripts/vendor/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/jquery.gsap.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/TweenMax.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/plugins/CSSRulePlugin.min.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/jquery.ScrollMagic.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/animation.gsap.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js'); ?>"></script>
    <!-- <script src="scripts/chromeSmoothScroll.js"></script>-->
    <script src="<?php echo url('assets/scripts/main.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/prestation.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
        <!-- endbuild -->
        <script>
          $(document).ready(function() {
            new ScrollMagic.Scene({
                  triggerElement: '#trigger',
                  triggerHook: 1,
                  duration: '25%'
              })
            .setTween(TweenMax.to('.landing h1', 0.5, {opacity:0,ease:Power2.easeOut}))
            // .addIndicators({name: 'headline'})
            .addTo(controller);
          });
        </script>
