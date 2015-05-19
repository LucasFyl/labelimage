

	<?php snippet('header') ?>
 	<div id="prestation" class="scan">

    <div class="loader">
      <span class="croix spin"></span>
    </div>

    <a href="#" class="arrow-down fadeIn"></a>

    <div class="landing">
      <h1 class="fadeIn">scan</h1>
      <img src="<?php echo url('assets/images/landing-scan.jpg'); ?>" alt="" class="background"/> 
    </div>
    
    <div id="trigger"></div>
    <div id="trigger2"></div>
    <div id="trigger3"></div>
      
    <div class="main-content" id="custom-grid-container">
      <div class="custom-grid-part left first">
        <h3>Scan</h3>
        <h4>L'atelier vous propose la numerisation de vos originaux <br/>
        a des fins artistiques ou de reproduction</h4>
        <p class="bold">Nous disposons pour cela de plusieurs types de scanner :</p>
        <p><span>Imacon Flextight</span> pour vos originaux allant du 24 x 36 au 13 x 18 cm<br/>
        <span>Scanner rotatif Tango d'Heidelberg</span> pour vos images les plus exigeantes<br/>
        <span>Scan à plat</span> pour vos documents ou plaque de verre</p>

        <p class="bold">Nous vous proposons également la numérisation à plat de vos originaux de grande dimension, ainsi que pour vos documents fragiles.</p>
        <p>Les tableaux ou toiles tendues peuvent être parcourus par leur vitrage sans déplacement de leurs cadres.<br/>
        Les fichiers Tiff sont remis en 16 bits couleur ou noir et blanc, sur DVD ou en téléchargement. Ils sont livrés dépoussiérés, optimisés en chromie et netteté.</p>
      </div>
      <div class="custom-grid-part right">
        <div class="h2-bloc">
          <h2>Creer</h2>
          <h2>votre original</h2>
          <h2>numerique</h2>
        </div>   
        <div class="asset-bg scan">
          <img src="<?php echo url('assets/images/asset-tube-scan.png'); ?>" alt="scan" class='scan'>
        </div>
      </div>
    </div>
  </div>
  

  <?php snippet('scripts') ?>  
  <script src="<?php echo url('assets/scripts/prestation.js'); ?>"></script>
  <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
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