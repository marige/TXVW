<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
    <!--<![endif]-->
     
    <head>
        <meta charset="utf-8">
        <title>TAXI AT THE PIER</title>
        <meta name="description" content=""/>
        <meta name="author" content="TATP team">
        
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo  BASE_URL_THEME; ?>vendor/images/favicon.png">
        
        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
        
        <!-- Font Awesome CSS -->
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
        
        <!-- Fontello CSS -->
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/fonts/fontello/css/fontello.css" rel="stylesheet">
        
        <!-- Plugins -->
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/css/animations.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/plugins/hover/hover-min.css" rel="stylesheet">		
        
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/css/style.css" rel="stylesheet" >
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/css/typography-default.css" rel="stylesheet" >
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/css/skins/dark_cyan.css" rel="stylesheet">
        
        
        <link href="<?php echo  BASE_URL_THEME; ?>vendor/css/custom.css" rel="stylesheet">
        
        
    </head>
    <body class="front-page ">
        
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
        
        <!-- page wrapper start -->
        <!-- ================ -->
        <!-- ================ -->
         
        <div class="header-top colored">
            <div class="container">
                <div class="row">
                    <div class="col-2 col-md-5">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-sm-down">
                                <li class="twitter"><a target="_blank" href="https://twitter.com/IZIchange"><i class="fa fa-twitter"></i></a></li>
                                <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCr8rkaCWDOFuknWOM4mJdUg"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="facebook"><a target="_blank" href="https://www.fb.me/Changeizi"><i class="fa fa-facebook"></i></a></li>
                                <li class="telegram"><a target="_blank" href="https://t.me/izichange"><i class="fa fa-telegram"></i></a></li>
                            </ul>
                            <div class="social-links hidden-md-up circle small">
                                <div class="btn-group dropdown">
                                    <button id="header-top-drop-1" type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                                        <li class="twitter"><a target="_blank" href="https://twitter.com/IZIchange"><i class="fa fa-twitter"></i></a></li>
                                        <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCr8rkaCWDOFuknWOM4mJdUg"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="facebook"><a target="_blank" href="https://www.fb.me/Changeizi"><i class="fa fa-facebook"></i></a></li>
                                        <li class="telegram"><a target="_blank" href="https://t.me/izichange"><i class="fa fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- header-top-first end -->
                     </div>
                    <div class="col-10 col-md-7">
                        
                        <div class="header-top-dropdown text-right">
                            
                              <?php if(!isset($_SESSION['clientInfoEmail'])) { ?>
                            
                             <div class="btn-group">
                                <button id="header-top-drop-2" type="button" class="btn dropdown-toggle btn-default btn-sm dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user pr-2"></i> S'inscrire</button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-top-drop-2">
                                    <li>
                                        <form method="post" action="/client/pu_auth/register" class="login-form margin-clear">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Email</label>
                                                <input required type="mail" name="email" class="form-control" placeholder="">
                                                <i class="fa fa-envelope form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Mot de passe</label>
                                                <input required name="password" type="password" class="form-control" placeholder="">
                                                <i class="fa fa-lock form-control-feedback"></i>
                                            </div>
                                            
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Confirmer mot de passe</label>
                                                <input required name="repass" type="password" class="form-control" placeholder="">
                                                <i class="fa fa-lock form-control-feedback"></i>
                                            </div>
                                            <button name="action" value="signup" type="submit" class="btn btn-gray btn-sm">S'inscrire</button>
                                            
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button id="header-top-drop-2" type="button" class="btn dropdown-toggle btn-default btn-sm dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lock pr-2"></i> Se connecter</button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-top-drop-2">
                                    <li>
                                        <form method="post" action="/client/pu_auth/login" class="login-form margin-clear">
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Email</label>
                                                <input required type="mail" name="email" class="form-control" placeholder="">
                                                <i class="fa fa-envelope form-control-feedback"></i>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label class="control-label">Mot de passe</label>
                                                <input required name="password" type="password" class="form-control" placeholder="">
                                                <i class="fa fa-lock form-control-feedback"></i>
                                            </div>
                                            <button name="action" value="signin" type="submit" class="btn btn-gray btn-sm">Se connecter</button>
                                            
                                            <ul>
                                                <li><a href="/client/pu_auth/passerecorver">Mot de passe oublié ?</a></li>
                                            </ul>
                                            
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            
                             <?php }else{?>
                            <div class="btn-group">
                      <a href="/client/pu_profil" class="btn btn-default btn-sm"><i class="fa fa-user pr-2"></i> Mon compte</a>
                    </div>
                            <div class="btn-group">
                      <a href="/client/pu_disconnect" class="btn btn-default btn-sm"><i class="fa fa-sign-out pr-2"></i> Deconnexion</a>
                    </div>
                            
                             <?php } ?>
                        </div>
                        <!-- header-top-second end -->
                        
                    </div>
                </div>
                <?php echo $this->Session->flash(); ?>

            </div>
           
        </div>
        <!-- header-top end -->
        <div class="page-wrapper">
            <!-- header-container start -->
            <div class="header-container">
                
                
                <header class="header dark fixed fixed-desktop clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-auto hidden-md-down pl-3">
                                
                                <!-- header-first start -->
                                <!-- ================ -->
                                <div class="header-first clearfix">
                                    
                                    <!-- logo -->
                                    <div id="logo" class="logo">
                                        <a href="index.html"><img id="logo_img" style="height:60px" class="img-responsive" src="<?php echo  BASE_URL_THEME; ?>images/logoIzichange_.png" alt="Izichange"></a>
                                    </div>
                                    
                                    <!-- name-and-slogan 
                                    <div class="site-slogan">
                                        Innover pour servir
                                    </div>
                                    -->
                                </div>
                                <!-- header-first end -->
                                
                            </div>
                            <div class="col-lg-8 col-xl-9">
                                
                                <!-- header-second start -->
                                <!-- ================ -->
                                <div class="header-second clearfix">
                                    
                                    
                                    <div class="main-navigation  animated">
                                        <nav class="navbar navbar-toggleable-md navbar-light p-0">
                                            
                                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1"  aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="navbar-brand clearfix hidden-lg-up">
                                                
                                                <!-- logo -->
                                                <div id="logo" class="logo">
                                        <a href="index.html"><img id="logo_img" style="height:60px" class="img-responsive" src="<?php echo  BASE_URL_THEME; ?>images/logoIzichange_.png" alt="Izichange"></a>
                                    </div>
                                    
                                                
                                                
                                                
                                            </div>
                                            
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <!-- main-menu -->
                                                <ul class="navbar-nav ml-xl-auto">
                                                    
                                                    <!-- menu start -->
                                                    <li class="nav-item dropdown">
                                                        <a href="#noussuivre" class="nav-link "  >Nous suivre</a>
                                                    </li>
                                                    
                                                    <li class="nav-item dropdown">
                                                        <a href="#parrainage" class="nav-link">Parrainage</a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a href="#derniere_trx" class="nav-link"  >Dernières transactions</a>
                                                    </li>
                                                    
                                                    <li class="nav-item dropdown">
                                                        <a href="#footer_sec" class="nav-link"  >A propos</a>
                                                    </li>
                                                    
                                                </ul>
                                                <!-- main-menu end -->
                                            </div>
                                        </nav>
                                    </div>
                                    <!-- main-navigation end -->
                                </div>
                                <!-- header-second end -->
                                
                            </div>
                            
                        </div>
                    </div>
                </header>
                <!-- header end -->
            </div>
            <!-- header-container end -->
            <!-- banner start -->
            <!-- ================ -->
            <div class="banner clearfix">
                
                <!-- slideshow start -->
                <!-- ================ -->
                <div class="slideshow">
                    
                    <!-- slider revolution start -->
                    <!-- ================ -->
                    <div class="slider-revolution-5-container">
                        <div id="slider-banner-fullscreen" class="slider-banner-fullscreen rev_slider" data-version="5.0">
                            <ul class="slides">
                                <!-- slide 1 start -->
                                <!-- ================ -->
                                <li class="text-center" data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="Innover pour servir">
                                    
                                    <!-- main image -->
                                    <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/1500971466-inovasyon-ve-peki-jpg.jpg" alt="slidebg1" data-bgposition="center center" data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">
                                    
                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                         data-x="center"
                                         data-y="center"
                                         data-start="0"
                                         data-transform_idle="o:1;"
                                         data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                         data-transform_out="o:0;s:600;"
                                         data-width="5000"
                                         data-height="5000">
                                    </div>
                                    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption xlarge_white"
                                         data-x="center"
                                         data-y="110"
                                         data-start="1000"
                                         data-end="2500"
                                         data-splitin="chars"
                                         data-splitout="chars"
                                         data-elementdelay="0.1"
                                         data-endelementdelay="0.1"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[50%];o:0;s:600;e:Power4.easeInOut;"
                                         data-transform_out="x:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                         data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Inspiration
                                    </div>
                                    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption xlarge_white"
                                         data-x="center"
                                         data-y="110"
                                         data-start="3100"
                                         data-end="4600"
                                         data-splitin="chars"
                                         data-splitout="chars"
                                         data-elementdelay="0.1"
                                         data-endelementdelay="0.1"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[-50%];o:0;s:600;e:Power4.easeInOut;"
                                         data-transform_out="x:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                         data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Innovation
                                    </div>
                                    
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption xlarge_white"
                                         data-x="center"
                                         data-y="110"
                                         data-start="5200"
                                         data-end="6700"
                                         data-splitin="chars"
                                         data-splitout="chars"
                                         data-elementdelay="0.1"
                                         data-endelementdelay="0.1"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[50%];o:0;s:600;e:Power4.easeInOut;"
                                         data-transform_out="x:0;y:[-50%];o:0;s:200;e:Power2.easeInOut;"
                                         data-mask_in="x:0;y:0;s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Réussite
                                    </div>
                                    
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption large_white"
                                         data-x="center"
                                         data-y="110"
                                         data-start="7000"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                         data-transform_out="y:0;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[-100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"> <span class="logo-font text-default">IZICHANGE</span> <br>Innover pour mieux servir
                                    </div>
                                    
                                    
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption"
                                         data-x="center"
                                         data-y="250"
                                         data-hoffset="-232"
                                         data-start="1000"
                                         data-end="6200"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                         data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span class="icon large circle"><i class="circle icon-lightbulb"></i></span>
                                    </div>
                                    
                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption"
                                         data-x="center"
                                         data-y="250"
                                         data-start="3100"
                                         data-end="6200"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[-50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                         data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span class="icon large circle"><i class="circle icon-arrows-ccw"></i></span>
                                    </div>
                                    
                                    <!-- LAYER NR. 7 -->
                                    <div class="tp-caption"
                                         data-x="center"
                                         data-y="250"
                                         data-hoffset="232"
                                         data-start="5200"
                                         data-end="6200"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:[50%];y:0;o:0;s:700;e:Power4.easeInOut;"
                                         data-transform_out="x:0;y:0;o:0;s:700;e:Power2.easeInOut;"><span class="icon large circle"><i class="circle icon-chart-line"></i></span>
                                    </div>
                                    
                                    <!-- LAYER NR. 8 -->
                                    <div class="tp-caption tp-resizeme large_white"
                                         data-x="center"
                                         data-y="210"
                                         data-start="6400"
                                         data-end="10000"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                         data-transform_out="y:0;s:1000;e:Power2.easeInOut;"><div class="separator light"></div>
                                    </div>
                                    
                                    <!-- LAYER NR. 9 -->
                                    <div class="tp-caption medium_white"
                                         data-x="center"
                                         data-y="250"
                                         data-start="6800"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-50%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                         data-transform_out="y:0;s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[-50%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">De plus en plus <br> Les monnaies numériques occupent à nouveau le devant de la scène.<br> En effet, Bitcoin suscite l’intérêt et la curiosité du grand public et des observateurs...
                                    </div>
                                    
                                    <!-- LAYER NR. 10 -->
                                    <div class="tp-caption"
                                         data-x="center"
                                         data-y="bottom"
                                         data-voffset="100"
                                         data-start="1250"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:2000;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                                        <a href="#page-start" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
                                    </div>
                                    
                                </li>
                                <!-- slide 1 end -->
                                
                                <!-- slide 2 start -->
                                <!-- ================ -->
                                <li data-transition="random" data-slotamount="7" data-masterspeed="default" data-title="Izichange">
                                    
                                    <!-- main image -->
                                    <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/575870c4e093345.jpg" alt="slidebg2" data-bgposition="center center" data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">
                                    
                                    <!-- Transparent Background -->
                                    <div class="tp-caption dark-translucent-bg"
                                         data-x="center"
                                         data-y="center"
                                         data-start="0"
                                         data-transform_idle="o:1;"
                                         data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                         data-transform_out="o:0;s:600;"
                                         data-width="5000"
                                         data-height="5000">
                                    </div>
                                    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption large_white"
                                         data-x="left"
                                         data-y="110"
                                         data-start="1000"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1100;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="logo-font">IZICHANGE</span> <br>Accompagne la révolution numérique en Afrique
                                    </div>
                                    
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption medium_white"
                                         data-x="left"
                                         data-y="240"
                                         data-speed="500"
                                         data-start="1200"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-laptop"></i></span> 100% Sûr
                                    </div>
                                    
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption medium_white"
                                         data-x="left"
                                         data-y="300"
                                         data-speed="500"
                                         data-start="1400"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="icon default-bg circle small hidden-xs"><i class="icon-check"></i></span>Les échanges en au plus 10 minutes
                                    </div>
                                    
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption medium_white"
                                         data-x="left"
                                         data-y="360"
                                         data-speed="500"
                                         data-start="1600"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="icon default-bg circle small hidden-xs"><i class="icon-gift"></i></span> Très accessible grâce à une bonne ergonomie
                                    </div>
                                    
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption medium_white"
                                         data-x="left"
                                         data-y="420"
                                         data-speed="500"
                                         data-start="1800"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><span class="icon default-bg circle small hidden-xs"><i class="icon-hourglass"></i></span>Prise en charge mobile banking
                                    </div>
                                    
                                    <!-- LAYER NR. 6 -->
                                    <div class="tp-caption small_white"
                                         data-x="left"
                                         data-y="490"
                                         data-speed="500"
                                         data-start="2000"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[100%];sX:1;sY:1;o:0;s:900;e:Power4.easeInOut;"
                                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                         data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="/dashboard/echange/dollar" class="btn btn-default-transparent btn-lg btn-animated">Effectuer une transaction <i class="fa fa-cart-arrow-down"></i></a>
                                    </div>
                                </li>
                                <!-- slide 2 end -->
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                    <!-- slider revolution end -->
                    
                </div>
                <!-- slideshow end -->
                
            </div>
            <!-- banner end -->
            
            <div id="page-start"></div>
            
            <section class="section clearfix" id="noussuivre">
                <div class="container">
                    <h3 class="mt-4">Pourquoi <strong>Nous</strong> Choisir ?</h3>
                    <div class="separator-2"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- accordion start -->
                            <!-- ================ -->
                            <div id="accordion" class="collapse-style-2 mb-4" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h4 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-bold pr-10"></i> LA CREDIBILITE DANS TOUTES VOS OPERATIONS
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-block">
                                            Composé d'une équipe d'experts en économie numérique et cryptomonnaie, IZICHANGE vous permet d'effectuer en toute crédibilité 
                                            vos changes de devises,c'est à dire acheter et vendre vos Dollars (PAYEER, PERFECT MONEY, ADVCASH) pour du Cfa via MTN Mobile Money, MOOV Money, AIRTEL Money Niger, 
                                            MOBICASH Burkina Faso, ORANGE Money Niger, Western Union, Wari, Money Gram et Ecobank Mobile Banking.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h4 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fa fa-leaf pr-10"></i>L’INNOVATION AU SERVICE DE SA CLIENTELE 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-block">
                                            Nous innovons en vous permettant aussi de faire des changes de monnaies numériques
                                            ( c'est à dire les Crypto Monnaies tels que le bitcoin, bitcoin cash,
                                            ethereum, Dash, Ripple, Monero, Litecoin, Tron) pour avoir des devises locales.
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h4 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="fa fa-lightbulb-o pr-10"></i>SÉCURITÉ ET CÉLÉRITÉ DANS VOS TRANSACTIONS
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-block">
                                            Nous combinons les outils les plus sécurisants sur notre plateforme et vous garantissons la célérité dans toutes vos opérations.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h4 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <i class="fa fa-life-ring pr-10"></i>TOUJOURS DISPONIBLE ET AU SERVICE DE SES CLIENTS 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="card-block">
                                            Nous sommes disponible 24/7 pour vous aider dans toutes vos transactions et notre service Client vous réponds, vous assiste et vous accompagne dans toutes vos transactions »
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion end -->
                        </div>
                        <div class="col-lg-6 space-bottom">
                            <div class="embed-responsive embed-responsive-16by9">                         
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/1QGPEmeHZAY"></iframe>                                      
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-4">Derniers <strong>Moyens de paiements ajoutés</strong></h3>
                    <div class="separator-2"></div>
                    <div class="row grid-space-10">
                        <div class="col-md-6 col-lg-3">
                            <div class="image-box style-2 mb-20 bordered text-center">
                                <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators top">
                                        
                                        <?php $i=0; for ($i=0;$i<sizeof($service_last); $i++) { ?>
                                        
                                        <li data-target="#carousel-portfolio" data-slide-to="<?= $i ;?>" <?php if($i==0){ echo 'class="active"';} ?>></li>
                                        <?php  }   ?>
                                    </ol>
                                    
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <?php $j=0;  foreach ($service_last as $key => $value) { ?>
                                        
                                        <div class="carousel-item <?php if($j==0){ echo 'active';} ?>">
                                            <div class="overlay-container">
                                                <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/<?= $value->image ;?>.jpg" alt="Logo Service">
                                                <div class="overlay-to-top">
                                                    <p class="small margin-clear"><em><?= $value->libservice ;?> <br> <?= $value->slogan ;?></em></p>
                                                </div>
                                            </div>
                                        </div>
                                         <?php $j++; }   ?>
                                        
                                        
                                    </div>
                                </div>
                                <div class="body shadow light-gray-bg ">
                                    <h3>Moyens de transfert</h3>
                                    <div class="separator"></div>
                                    <p style="text-align: justify;">IZICHANGE vous offre le service de conversion entre les différents moyens ci-dessus cités. Nous sommes ouverts à vos demandes.
                                        Exprimez un besoin, et cela sera traité au sein du groupe pour juger de la pertinence. Aidons-nous à sortir nos régions du retard dans le numérique.
                                    </p>
                                    <a href="#contactUs" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Demander un ajout<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                                <div class="overlay-container">
                                    <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/bitcoinSlide.jpg" alt="">
                                    <div class="overlay-to-top">
                                        <p class="small margin-clear"><em>Bitcoin<br> technologie blockchain</em></p>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>Bitcoin</h3>
                                    <div class="separator"></div>
                                    <p style="text-align: justify;">Le Bitcoin, première utilisation de la technologie blockchain dans le monde des finances. 
                                        Il a été ajouté pour satisfaire les nombreux demandes exprimées par nos utilisateurs. Le Btc est accepté comme moyen de paiement dans beaucoup de pays
                                        et surtout dans les services en ligne.  </p>
                                    <a href="portfolio-item.html" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Acheter<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div> 
                        </div> 
                        <div class="clearfix visible-md-down"></div>
                        <div class="col-md-6 col-lg-3">
                            <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                                <div class="overlay-container">
                                    <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/ethSlide.jpg" alt="">
                                    <div class="overlay-to-top">
                                        <p class="small margin-clear"><em>Etherum <br> technologie blockchain</em></p>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>ETH </h3>
                                    <div class="separator"></div>
                                    <p style="text-align: justify;">Deuxième en terme de capitalisation sur le marché des monnaies virtuelles, l'Etherum retrouve sa force dans sa plateforme
                                        qui est adoptée par beaucoup de développeur de la blockchain. Ceci favorise son avancé et son importance dans l'écosytème des crypto</p>
                                    <a href="/dashboard/echange/payeer" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Convertir<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                                <div class="overlay-container">
                                    <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/xrpSlide.jpg" alt="">
                                    <div class="overlay-to-top">
                                        <p class="small margin-clear"><em>Ripple <br> technologie blockchain</em></p>
                                    </div>
                                </div>
                                <div class="body">
                                    <h3>XRP</h3>
                                    <div class="separator"></div>
                                    <p style="text-align: justify;">Le Ripple a été ajouté vu son expansion, et sa vision de connecter les banques au niveau international et on dira mondial.
                                        Pour ceux qui connaissent son historique, il est possible de faire facilement de profit en achetant le ripple sur du long terme. Ses variations étonnent toujours et attirent les investisseurs.</p>
                                    <a href="/dashboard/echange/payeer" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Essayer<i class="fa fa-arrow-right pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- section end -->
            <section class="pv-30 light-gray-bg clearfix" id="parrainage">
                <div class="container">
                    <h3 class="title logo-font text-center text-default">Parrainage </h3>
                    <div class="separator"></div>
                    <p class="text-center">Le programme de parrainage vous offre une rémunération minimum de  <strong>15%</strong> sur toutes les transactions de vos filleuls</p>
                    <br>
                    <div class="row grid-space-10">
                        <div class="col-md-6 col-lg-3">
                            <div class="pv-30 ph-20 white-bg feature-box bordered text-center">
                                <span class="icon default-bg circle"><i class="fa fa-share-square"></i></span>
                                <h3>Etape n°1</h3>
                                <div class="separator clearfix"></div>
                                <p>Inscrivez vous et  accedez à votre lien de parrainage , partagez cela partout ou besoin sera afin de recommander la plateforme</p>
                                <a href="<?php if(!isset($_SESSION['clientInfoEmail'])) { ?>/client/pu_auth/register<?php }else{?>/client/pu_referral<?php } ?>" class="btn btn-default btn-animated">S'inscrire <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pv-30 ph-20 white-bg feature-box bordered text-center">
                                <span class="icon default-bg circle"><i class="fa fa-calculator"></i></span>
                                <h3>Etape n°2</h3>
                                <div class="separator clearfix"></div>
                                <p>Une fois qu'un utilisateur s'inscrit à partir de votre lien , vous pouvez deja compter le nombre de fieuls enroler</p>
                                <a href="<?php if(!isset($_SESSION['clientInfoEmail'])) { ?>/client/pu_auth/login<?php }else{?>/client/pu_referral<?php } ?>" class="btn btn-default btn-animated">Se connecter <i class="pl-1 fa fa-stethoscope"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pv-30 ph-20 default-bg feature-box bordered text-center">
                                <span class="icon dark-bg circle"><i class="fa fa-dollar"></i></span>
                                <h3>Etape n°3</h3>
                                <div class="separator clearfix"></div>
                                <p style="text-align: justify">Des que l'un de vos fieuls effectue une opération , vous disposez de 15% de bonus sur la marge générée par l'opération</p>
                                <a href="<?php if(!isset($_SESSION['clientInfoEmail'])) { ?>/client/pu_auth/login<?php }else{?>/client/pu_referral<?php } ?>" class="btn btn-default btn-animated">voir gains <i class="pl-1 fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="pv-30 ph-20 white-bg feature-box bordered text-center">
                                <span class="icon default-bg circle"><i class="fa fa-clock-o"></i></span>
                                <h3>Top 3 Parrains</h3>
                                <div class="separator-2 mt-20 clearfix"></div>
                                <ul class="list-unstyled small list-icons text-left">                              
                                    <li><strong class="text-default"><?php echo $bestref[0]->nom; ?></strong> <span class="pull-right"><?php echo round($bestref[0]->bonus,0); ?> FCFA</span></li>
                                    <li><strong class="text-default"><?php echo $bestref[1]->nom; ?></strong> <span class="pull-right"><?php echo round($bestref[1]->bonus,0); ?> FCFA</span></li>
                                    <li><strong class="text-default"><?php echo $bestref[2]->nom; ?></strong> <span class="pull-right"><?php echo round($bestref[2]->bonus,0); ?> FCFA</span></li>
                                </ul>
                                <div class="separator-3 mt-20 clearfix"></div>
                                <p class="small text-default">Félicitations aux meilleurs parrains.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
            
            
            
            <!-- Transactions historique -->
            <section id="derniere_trx" class="pv-40 dark-translucent-bg parallax" style="background-image:url(<?php echo  BASE_URL_THEME; ?>vendor/images/trx.png); background-repeat: repeat-y;">
                <div class="owl-carousel content-slider-with-controls-autoplay-hover-stop buttons-hide">
                    <?php if (isset($operations_last)) {
                        $ligne=0;
                        $tableau=0;
                        ?>
                    
                    <div class="container">
                        <h3 class="logo-font text-center">Dernières transactions</h3>
                        <div class="separator"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                      <?php      foreach ($operations_last as $key => $value) {
                                          if($tableau==8){ $ligne=0;$tableau=0?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h3 class="logo-font text-center">Dernieres transactions</h3>
                        <div class="separator"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                          <?php }
                                          
                                          if($ligne==4){ ?>
                                </ul>
                            </div>      
                            <div class="col-lg-6">
                                <ul class="list">  
                                    
                              <?php            } 
                            ?>
                                    <li class="clearfix">
                                        <h4 class="title"><?= $value->operations_lib ;?></h4>
                                        <p class="small"><?= $value->date_operation ;?> <i class="fa fa-arrow-down"></i> <?= $value->montant_envoye_par_client; ?> <?= $value->indevise; ?><strong class="pull-right text-default"><i class="fa fa-arrow-up"></i> <?= $value->montant_recu_par_client; ?> <?= $value->outdevise; ?></strong></p>
                                    </li>
                                    
                                    
                                            <?php 
                                             $ligne++;
                                             $tableau++;
                                      } ?>
                                    
                                </ul>
                            </div>
                            
                            
                        </div>
                        <div class="space-bottom"></div>
                    </div>
                        <?php
                        
                    } else {
                        
                    }
                    ?>
                </div>
            </section>
            <!-- section end -->
            <!-- section start -->
            <!-- ================ -->
            <section class="section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3 class="mt-4">Nos <span class="text-default">Départements</span></h3>
                            <div class="separator-2"></div>
                            <!-- accordion start -->
                            <!-- ================ -->
                            <div class="collapse-style-2 mb-4" id="accordion-2" role="tablist" >
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h4 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
                                                <i class="fa fa-eye pr-10"></i>IT Technique
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne-2" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-block bordered p-15" style="text-align: justify">
                                            Constitué de membres expérimentés et rompus à la tâche, nous deployons toujours les nouveaux modules et assurons la maintenance régulière de la plateforme
                                            dans le but de garantir sa sécurité afin d'offir un service de qualité aux clients.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h4 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-2" class="collapsed" aria-expanded="true" aria-controls="collapseTwo-2">
                                                <i class="fa fa-leaf pr-10"></i>Marketing &amp Communication
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-block bordered p-15" style="text-align: justify">
                                            Le service Marketing et communication de IZICHANGE met en oeuvre de par son équipe dynamique et professionnelle, de multitudes stratégies modernes et multicanaux
                                            pour tenir informer ses clients de ses différentes offres et services. Il combine les techniques les plus modernes pour une gestion optimisée de sa relation client. 
                                            Il intègre dans ses missions la mise à disposition d'offres compétitives et profitables à ses clients. 
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h4 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-2" class="collapsed" aria-expanded="true" aria-controls="collapseThree-2">
                                                <i class="icon-users-1 pr-10"></i>Economie Finance
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-block bordered p-15" style="text-align: justify">
                                            <b>IZICHANGE </b> dispose dans son organisation d'un service économique dynamique qui analyse le marché à travers l'offre, 
                                            la demande et les prix. Il explore également les divers moyens de paiement pour  offrir aux utilisateurs de tous les horizons la possibilité d'interagir avec sa plateforme. 
                                            Il est composé d'experts en économie numérique et cryptomonnaie.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h4 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseFour-2" class="collapsed" aria-expanded="true" aria-controls="collapseFour-2">
                                                <i class="fa-female fa pr-10"></i>Opérations
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="card-block bordered p-15">
                                            Izichange, de par ses opérateurs vous traitent vos demandes en 10mn chrono, et disponible à répondre à toutes vos questions, réclamations sur le Tchat 24h/24 et 7j/7
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- accordion end -->
                        </div>
                        
                        <div class="col-lg-4">
                            <h3 class="mt-4">Offres <span class="text-default">spéciales</span></h3>
                            <div class="separator-2"></div>
                            <div class="owl-carousel content-slider-with-large-controls-autoplay dark-controls light-gray-bg buttons-hide">
                                <div class="image-box style-2">
                                    <div class="overlay-container overlay-visible">
                                        <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/btc4.jpg" alt="BTC">
                                        <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                        <div class="overlay-bottom visible">
                                            <div class="text">
                                                <p class="lead margin-clear text-center">1 BTC= <?php echo round($btcCfa,2);?> FCFA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <p>Le Btc connu pour sa fluctuation, nous à IZICHANGE vous affichons sa valeur en temps réel selon le prix du marché. 
                                            Donc veuillez toujours jeter coup d'oeil pour avoir le coût actuel</p>
                                        <p class="mt-3"><a href="/dashboard/echange/dollar" class="btn btn-animated btn-lg btn-gray-transparent">Effectuer une transaction<i class="fa fa-send-o pl-20"></i></a></p>
                                        
                                    </div>
                                </div>
                                <div class="image-box style-2">
                                    <div class="overlay-container overlay-visible">
                                        <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/payeer.jpg" alt="">
                                        <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                        <div class="overlay-bottom hidden-xs">
                                            <div class="text">
                                                <p class="lead margin-clear text-left">1$=600 FCFA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <p>Nous achetons vos $ payeer à un prix concurenciel qui nous fait toujours premier sur le marché</p>
                                        <p class="mt-3"><a href="/dashboard/echange/dollar" class="btn btn-animated btn-lg btn-gray-transparent">Effectuer une transaction<i class="fa fa-send-o pl-20"></i></a></p>
                                    </div>
                                </div>
                                <div class="image-box style-2">
                                    <div class="overlay-container overlay-visible">
                                        <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/mtn.jpg" alt="">
                                        <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                        <div class="overlay-bottom hidden-xs">
                                            <div class="text">
                                                <p class="lead margin-clear text-left">650FCA=1$</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="body padding-horizontal-clear">
                                        <p>Achat de dollar numérique pose souvent problème dans nos régions. Izichange fait toujours l'effort de contrôle de ses prix afin de vous servir</p>
                                        <p class="mt-3"><a href="/dashboard/echange/dollar" class="btn btn-animated btn-lg btn-gray-transparent">Effectuer une transaction<i class="fa fa-send-o pl-20"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="mt-4">Nous <span class="text-default">Suivre</span></h3>
                            <div class="separator-2"></div>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FChangeizi%2F&tabs=timeline&width=400&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            
                        </div>                      
                        
                    </div>
                </div>
            </section>
            <!-- section end -->
            <!-- section start -->
            <!-- ================ -->
            
            <div class="owl-carousel content-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/testimonial-1.jpg" alt="Jean" title="Jean" class="rounded-circle">
                                </div>
                                <h3>Super!</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>J'avais peur mais finalement IZICHANGE est ma plateforme</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- Jean</div>
                                    <div class="testimonial-info-2">du Cameroun</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/testimonial-2.jpg" alt="Adel" title="Adel" class="rounded-circle">
                                </div>
                                <h3>interessant!</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>je ne souffre plus pour échanger du CFA ou du $. Merci à izichange!</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- Adel</div>
                                    <div class="testimonial-info-2">du Bénin</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="testimonial text-center">
                                <div class="testimonial-image">
                                    <img src="<?php echo  BASE_URL_THEME; ?>vendor/images/testimonial-3.jpg" alt="Aboudou" title="Aboudou" class="rounded-circle">
                                </div>
                                <h3>Merci!</h3>
                                <div class="separator"></div>
                                <div class="testimonial-body">
                                    <blockquote>
                                        <p>J'étais simplement surpris de la rapidté de transactions ici!</p>
                                    </blockquote>
                                    <div class="testimonial-info-1">- Aboudou</div>
                                    <div class="testimonial-info-2">du Niger</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
            
            
            
            <!-- section transactions historique start -->
            <!-- ================ -->
            
            <!-- section start -->
            <!-- ================ -->
            
            
            <!-- section start -->
            <!-- ================ -->
            <section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-6">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-6 text-center">
                            <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                                <span class="icon without-bg"><i class="fa fa-users"></i></span>
                                <h3><strong>Clients inscrits</strong></h3>
                                <span class="counter" data-to="<?php echo $nbinscrit;?>" data-speed="5000">0</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                                <span class="icon without-bg"><i class="fa fa-send"></i></span>
                                <h3><strong>Transactions effectués</strong></h3>
                                <span class="counter" data-to="<?php echo $nbtrx;?>" data-speed="5000">0</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                                <span class="icon without-bg"><i class="fa fa-bank"></i></span>
                                <h3><strong>Possibilités de transfert</strong></h3>
                                <span class="counter" data-to="<?php echo $nbtypeOp;?>" data-speed="5000">0</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                                <span class="icon without-bg"><i class="fa fa-share"></i></span>
                                <h3><strong>Opérations en cours</strong></h3>
                                <span class="counter" data-to="<?php echo $nbtrxOn;?>" data-speed="5000">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
            
            <section id="footer_sec">
                <!-- footer top start -->
                <!-- ================ -->
                <div class="dark-bg footer-top animated-text default-hovered">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="call-to-action text-center">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h2 class="mt-4">Izichange</h2>
                                            <h2 class="mt-4">Innover pour servir</h2>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="mt-3"><a href="/dashboard/echange/dollar" class="btn btn-animated btn-lg btn-gray-transparent">Effectuer une transaction<i class="fa fa-send-o pl-20"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer top end -->
                <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
                <!-- ================ -->
                <footer id="footer" class="clearfix">
                    
                    <!-- .footer start -->
                    <!-- ================ -->
                    <div class="footer">
                        <div class="container">
                            <div class="footer-inner">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="footer-content">
                                            <div class="logo-footer"><img class="img-responsive" id="logo-footer" src="<?php echo  BASE_URL_THEME; ?>images/logoIzichange.png" alt="" style="height:60px;"></div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="footer-content">
                                                        <h2 class="title">A propos</h2>
                                                        <div class="separator-2"></div>
                                                        <p style="text-align: justify">IZICHANGE est un groupe des habitutués des transations en ligne qui ont compris que l'Afrique souffre de l'indisponibilité ou de la 
                                                            précarité des services financiers numériques pour faire les échanges sur le web. L'Afrique aussi a droit au numérique</p>
                                                        <ul class="social-links circle animated-effect-1"> 
                                                            <li class="facebook"><a target="_blank" href="https://www.fb.me/Changeizi"><i class="fa fa-facebook"></i></a></li>
                                                            <li class="twitter"><a target="_blank" href="https://twitter.com/IZIchange"><i class="fa fa-twitter"></i></a></li>
                                                            <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCr8rkaCWDOFuknWOM4mJdUg"><i class="fa fa-youtube"></i></a></li>
                                                            <li class="telegram"><a target="_blank" href="https://t.me/izichange"><i class="fa fa-telegram"></i></a></li>
                                                        </ul>
                                                        <ul class="list-icons">                                                
                                                            <li><a href="mailto:contact@izichange.com"><i class="fa fa-envelope-o pr-10"></i>contact@izichange.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="footer-content">
                                                        <h2 class="title">Liens utiles</h2>
                                                        <div class="separator-2"></div>
                                                        <nav>
                                                            <ul class="mb-20 nav flex-column list-style-icons">
                                                                <li class="nav-item"><a class="nav-link" href="/client/pu_auth/register"><i class="icon-tools"></i> S'inscrire</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="/client/pu_auth/login"><i class="icon-search"></i>Se connecter</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="/dashboard/echange/dollar"><i class="icon-basket-1"></i>Changer</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="#parrainage"><i class="icon-heart"></i>Parrainage</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="#derniere_trx"><i class="icon-chat"></i>Dernières transactions</a></li>
                                                                <li class="nav-item"><a class="nav-link" target="_blank" href="#contactUs"><i class="icon-thumbs-up"></i>Nous contacter</a></li>
                                                                <li class="nav-item"><a class="nav-link" href="#"><i class="icon-lock"></i> Condition d'utilisation</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4">
                                                    <div id="contactUs" class="footer-content">
                                                        <h2 class="title">Nous contacter</h2>
                                                        <div class="separator-2"></div>
                                                        
                                                        <form method="post" action="/client/pu_message">
                                                            <div class="form-group has-feedback">
                                                                <label class="sr-only" for="name2">Nom</label>
                                                                <input required type="text" class="form-control" id="name2" placeholder="Nom" name="name">
                                                                <i class="fa fa-user form-control-feedback"></i>
                                                            </div>
                                                            <div class="form-group has-feedback">
                                                                <label class="sr-only" for="email2">Adresse Email</label>
                                                                <input required type="email" class="form-control" id="email2" placeholder="entrez votre email" name="replyto">
                                                                <i class="fa fa-envelope form-control-feedback"></i>
                                                            </div>
                                                            <div class="form-group has-feedback">
                                                                <label class="sr-only" for="message2">Message</label>
                                                                <textarea required class="form-control" rows="6" id="message2" placeholder="Message" name="message"></textarea>
                                                                <i class="fa fa-pencil form-control-feedback"></i>
                                                            </div>
                                                            <button name="action"  type="submit" value="se" class="margin-clear submit-button btn btn-default">Envoyer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .footer end -->
            </section>
            <!-- .subfooter start -->
            <!-- ================ -->
            <div class="subfooter dark-bg">
                <div class="container">
                    <div class="subfooter-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-center">Copyright © 2018 IZICHANGE designed by <a target="_blank" href="#">Team tech izi</a>. Tout droit réservé</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .subfooter end -->
            
        </footer>
        <!-- footer end -->
    </div>
    <!-- page-wrapper end -->
    
    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/tether.min.js"></script>
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Modernizr javascript -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/modernizr.js"></script>
    <!-- jQuery Revolution Slider  -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <!-- Isotope javascript -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/isotope/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup javascript -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Appear javascript -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/waypoints/sticky.min.js"></script>
    <!-- Count To javascript -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/jquery.countTo.js"></script>
    <!-- Parallax javascript -->
    <script src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/jquery.parallax-1.1.3.js"></script>
    <!-- Contact form -->
    <script src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/jquery.validate.js"></script>
    <!-- Owl carousel javascript -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/plugins/owlcarousel2/owl.carousel.min.js"></script>
    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="<?php echo  BASE_URL_THEME; ?>vendor/js/template.js"></script>
    <!-- Custom Scripts -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123738175-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123738175-1');
</script>

</body>
</html>
