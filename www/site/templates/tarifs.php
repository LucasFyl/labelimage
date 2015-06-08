    <?php snippet('header') ?>
    
    <div id="tarifs">

        <div class="loader">
           <span class="croix spin"></span>
        </div>


        <div class="landing">
            <a href="#" class="arrow-down fadeIn"></a>
            <h1 class="fadeIn">tarifs</h1>
            <div class="background"></div>
        </div>
        
        <div id="trigger"></div>
        <div id="trigger2"></div>
        <div id="trigger3"></div>
        
        <div class="main-content" id="">
            <section class="container">
                <section class="row scan">
                    <div class="table col-xs-12">
                        <div class="header-part"><h2>scan</h2></div>
                        <div class="row tr"></div>
                        <div class="row td"></div>
                    </div>
                </section>
                <section class="row traitement">
                    <div class="table col-xs-12">
                        <div class="header-part"><h2>traitement</h2></div>
                        <div class="row tr"></div>
                        <div class="row td"></div>
                    </div>
                </section>
                <section class="row tirages1">
                    <div class="table col-xs-12">
                        <div class="header-part"><h2>tirages</h2></div>
                        <div class="row tr"></div>
                        <div class="row td"></div>
                    </div>
                </section>
                <section class="row tirages2">
                    <div class="table col-xs-12">
                        <div class="row tr"></div>
                        <div class="row td"></div>
                    </div>
                </section>
                <section class="row finitions">
                    <div class="table col-xs-12">
                        <div class="header-part"><h2>finitions</h2></div>
                        <div class="row tr"></div>
                        <div class="row td"></div>
                    </div>
                </section>
                <section class="row footer-part">
                    <div class="col-xs-6">
                        <a href="#">télécharger nos tarifs au format pdf</a>
                    </div>
                    <div class="col-xs-6">
                        <p>prix h.t.  juin 2015</p>
                    </div>
                </section>
            </section>
        </div>
    </div>

    <?php snippet('scripts'); ?>
    <script src="<?php echo url('assets/scripts/tarifs.js'); ?>"></script>
    <script src="<?php echo url('assets/scripts/scenes-tarifs.js'); ?>"></script>
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