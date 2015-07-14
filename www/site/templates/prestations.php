

	<?php snippet('header') ?>
 	<div id="prestations">

    <div class="loader">
      <span class="croix spin"></span>
    </div>

    <div class="container-fluid outer">
    <div class="row">
      <span class="croix"></span>
      <section class="toPresta col-xs-12 col-sm-12 col-md-6 ">
        <a href="<?php echo $page->children()->findByURI('scan')->url() ?>"></a>
        <h1 class="fadein">Scan</h1>
        <img src="<?php echo url('assets/images/bg-scan-nb.jpg'); ?>" class='nb' alt="Scan">
        <img src="<?php echo url('assets/images/bg-scan.jpg'); ?>" alt="Scan">
      </section>
      <section class="toPresta col-xs-12 col-sm-12 col-md-6 ">
        <a href="<?php echo $page->children()->findByURI('traitement')->url() ?>"></a>
        <h1 class="fadein">Traitement</h1>
        <img src="<?php echo url('assets/images/bg-traitement-nb.jpg'); ?>" class='nb' alt="traitement">
        <img src="<?php echo url('assets/images/bg-traitement.jpg'); ?>" alt="traitement">
      </section>
      <section class="toPresta col-xs-12 col-sm-12 col-md-6 ">
        <a href="<?php echo $page->children()->findByURI('tirages')->url() ?>"></a>
        <h1 class="fadein">Tirages</h1>
        <img src="<?php echo url('assets/images/bg-tirages-nb.jpg'); ?>" class='nb' alt="tirages">
        <img src="<?php echo url('assets/images/bg-tirages.jpg'); ?>" alt="tirages">
      </section>
      <section class="toPresta col-xs-12 col-sm-12 col-md-6 ">
        <a href="<?php echo $page->children()->findByURI('finitions')->url() ?>"></a>
        <h1 class="fadein">Finitions</h1>
        <img src="<?php echo url('assets/images/bg-finitions-nb.jpg'); ?>" class='nb' alt="finitions">
        <img src="<?php echo url('assets/images/bg-finitions.jpg'); ?>" alt="finitions">
      </section>
    </div>
    </div>


    <?php snippet('scripts'); ?>
      <script src="<?php echo url('assets/scripts/hello.js') ?>"></script>

      <script>
        $(document).ready(function() {
          // $('body').css('height', 'auto');
          
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