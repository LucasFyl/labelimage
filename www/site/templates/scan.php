

	<?php snippet('header') ?>
 	<div id="prestation" class="scan">

    <div class="loader">
      <span class="croix spin"></span>
    </div>

    <a href="#" class="arrow-down fadeIn"></a>

    <div class="landing">
      <h1 class="fadeIn">scan</h1>
      <div class="background"></div>
    </div>
    
    <div id="trigger"></div>
    <div id="trigger2"></div>
    <div id="trigger3"></div>
      
    <div class="main-content container-fluid fullH" >
      <div class="col-xs-12 col-md-6 left">
        <h3>Scan</h3>
        <h4>L'atelier vous propose la numérisation de vos originaux <br/>
        à des fins artistiques ou de reproduction</h4>
        <p class="bold">Nous disposons pour cela de plusieurs types de scanner :</p>
        <p><span>Imacon Flextight</span> pour vos originaux allant du 24 x 36 au 13 x 18 cm<br/>
        <span>Scanner rotatif Tango d'Heidelberg</span> pour vos images les plus exigeantes<br/>
        <span>Scan à plat</span> pour vos documents ou plaque de verre</p>

        <p class="bold">Nous vous proposons également la numérisation à plat de vos originaux de grande dimension sur scanner Cruze.</p>
        <p>Les fichiers Tiff sont remis en 8 bits couleur ou noir et blanc, sur DVD ou en téléchargement. Ils sont livrés dépoussiérés, optimisés en chromie et netteté.</p>
      </div>
      <div class="col-xs-12 col-md-6 hidden-xs hidden-sm right">
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
  <script src="<?php echo url('assets/scripts/scenes-presta.js'); ?>"></script>
  <script src="<?php echo url('assets/scripts/hello.js'); ?>"></script>
  <script>
    $(document).ready(function() {
      prestaController.addScene([
        headerPresta,
        landingPresta,
        headlinePresta
      ]);
    });
  </script>