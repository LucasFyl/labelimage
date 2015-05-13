

	<?php snippet('header') ?>
 	<div id="prestations">

    <div class="loader">
      <span class="croix spin"></span>
    </div>

    <div class="container-fluid outer">
      <span class="croix"></span>
      <section class="toPresta ratioImg">
        <a href="<?php echo $page->children()->findByURI('scan')->url() ?>"></a>
        <h1>Scan</h1>
        <img src="<?php echo url('assets/images/bg-scan-nb.jpg'); ?>" class='nb' alt="Scan">
        <img src="<?php echo url('assets/images/bg-scan.jpg'); ?>" alt="Scan">
      </section>
      <section class="toPresta ratioImg">
        <a href="<?php echo $page->children()->findByURI('traitement')->url() ?>"></a>
        <h1>Traitement</h1>
        <img src="<?php echo url('assets/images/bg-traitement-nb.jpg'); ?>" class='nb' alt="traitement">
        <img src="<?php echo url('assets/images/bg-traitement.jpg'); ?>" alt="traitement">
      </section>
      <section class="toPresta ratioImg">
        <a href="<?php echo $page->children()->findByURI('tirages')->url() ?>"></a>
        <h1>Tirages</h1>
        <img src="<?php echo url('assets/images/bg-tirages-nb.jpg'); ?>" class='nb' alt="tirages">
        <img src="<?php echo url('assets/images/bg-tirages.jpg'); ?>" alt="tirages">
      </section>
      <section class="toPresta ratioImg">
        <a href="<?php echo $page->children()->findByURI('finitions')->url() ?>"></a>
        <h1>Finitions</h1>
        <img src="<?php echo url('assets/images/bg-finitions-nb.jpg'); ?>" class='nb' alt="finitions">
        <img src="<?php echo url('assets/images/bg-finitions.jpg'); ?>" alt="finitions">
      </section>
    </div>


    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

        <!-- build:js scripts/main.js -->
        <script src="<?php echo url('assets/scripts/vendor/jquery/jquery.js') ?>"></script>
    <script src="<?php echo url ('assets/scripts/vendor/nicescroll/nicescroll.min.js'); ?>"></script>
        <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/jquery.gsap.min.js') ?>"></script>
        <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/TweenMax.min.js') ?>"></script>
        <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js') ?>"></script>
        <script src="<?php echo url('assets/scripts/vendor/gsap/src/minified/plugins/CSSRulePlugin.min.js') ?>"></script>
        <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js') ?>"></script>
        <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/jquery.ScrollMagic.js') ?>"></script>
        <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/animation.gsap.js') ?>"></script>
        <script src="<?php echo url('assets/scripts/vendor/ScrollMagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js') ?>"></script>
        <!-- <script src="scripts/chromeSmoothScroll.js"></script>-->
        <script src="<?php echo url('assets/scripts/main.js') ?>"></script>
        <script src="<?php echo url('assets/scripts/hello.js') ?>"></script>
        <!-- endbuild -->
        <script>
          $(document).ready(function() {
            
            $(document).on({
              mouseenter: function () {
                var bgNb = $(this).find('.nb');
                TweenMax.to(bgNb, 1, {opacity:0,ease:Power3.easeInOut});
              },

              mouseleave: function () {
                var bgNb = $(this).find('.nb');
                TweenMax.to(bgNb, 1, {opacity:1,ease:Power3.easeInOut});
              }
            }, '.toPresta');

          })
        </script>
  </div>