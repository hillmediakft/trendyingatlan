<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->title; ?></title>
        <base href="<?php echo BASE_URL; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1"><![endif]-->
        <meta name="description" content="<?php echo $this->description; ?>">
        <meta name="keywords" content="<?php echo $this->keywords; ?>">    
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7cSource+Sans+Pro:200,400,600,700,900,400italic,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="<?php echo SITE_CSS; ?>vendor.css">
        <link rel="stylesheet" href="<?php echo SITE_CSS; ?>font-awesome.css">
        <link rel="stylesheet" href="<?php echo Util::auto_version(SITE_CSS . 'custom-red.css'); ?>" type="text/css" media="all" >
        <link rel="stylesheet" href="<?php echo SITE_CSS; ?>owl.carousel.css">
        <link rel="stylesheet" href="<?php echo SITE_CSS; ?>owl.theme.css">
        <link href="<?php echo SITE_ASSETS; ?>plugins/cookie_consent/cookieBar.css" rel="stylesheet">
        <link href="<?php echo SITE_ASSETS; ?>plugins/side-feedback-form/feedback.css" rel="stylesheet">

        <link rel="shortcut icon" href="<?php echo SITE_IMAGE; ?>favicon.ico?v=1" type="image/x-icon">
        <!-- OLDALSPECIFIKUS CSS LINKEK -->
        <?php $this->get_css_link(); ?>
        <script><?php echo (isset($this->vars['js_vars'])) ? $this->vars['js_vars'] : '' ?></script>

        <?php if (ENV == "production") { ?>
            <script>
                // Google Analytics

            </script>      
        <?php } ?>    

    </head>

    <body class="index_slider feature_header_smal menu-default hover-default compact scroll-animation slider--slideInUp ">
        <div class="box js-box">   
            <div class="site-wrap js-site-wrap">

                <?php $this->load('tpl_head'); ?>

                <?php $this->load('content'); ?>

                <?php $this->load('tpl_foot'); ?>
            </div>
        </div>
        <button type="button" class="scrollup js-scrollup"></button>
        <!-- end of block .scrollup-->

        <?php $this->load('tpl_contact_side_panel'); ?>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyChgRnTbviCTSxwxtgWLg_qhj07dMP_Nqw"></script>

        <script src="<?php echo SITE_JS; ?>vendor.min.js"></script>
        <script src="<?php echo SITE_JS; ?>demodata.js"></script>
        <script src="<?php echo Util::auto_version(SITE_JS . 'app.js'); ?>"></script>
        <script src="<?php echo Util::auto_version(SITE_JS . 'demo.js'); ?>"></script>
        <script src="<?php echo SITE_JS; ?>owl.carousel.min.js"></script>
        <script src="<?php echo SITE_ASSETS; ?>plugins/cookie_consent/jquery.cookieBar.min.js"></script> 
        <script src="<?php echo Util::auto_version(SITE_JS . 'trendy.js'); ?>"></script>

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <?php $this->get_js_link(); ?>
        
            <div class="cookie-message">
                <p>Weboldalunk a jobb felhasználói élmény biztosítása érdekében http sütiket (cookie) használ. A Weboldal használatával Ön beleegyezik a sütik használatába. <a class="cookiebar-close">Elfogadom</a></p>
            </div>

    </body>
</html>                                                                                         
