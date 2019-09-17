<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Authentification</title>
        
    <?php require_once 'css.php';?>
    </head>
    
    <body>
        <main>
            
            <!-- Header -->
            <header id="js-header" class="u-header u-header--static u-header--floating g-mt-40--lg" data-header-fix-moment-classes="u-shadow-v18 g-bg-white">
                <div class="container">
                    <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10" data-header-fix-moment-exclude="g-bg-white g-py-10" data-header-fix-moment-classes="g-py-5">
                        <nav class="navbar navbar-expand-lg">
                            <!-- Responsive Toggle Button -->
                            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-10 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                                <span class="hamburger hamburger--slider">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </span>
                            </button>
                            <!-- End Responsive Toggle Button -->
                            
                            <!-- Logo -->
                            <a href="../../../index.html" class="navbar-brand">
                                <img src="../../../assets/img/logo/logo-1.png" alt="Image IZICHANGE">
                            </a>
                            <!-- End Logo -->
                            
                            <!-- Navigation -->
                            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--sm" id="navBar">
                                <ul class="navbar-nav text-uppercase g-font-weight-600 mx-auto">
                                    <li class="nav-item g-mx-25--lg">
                                        <a href="#" class="nav-link px-0">Home
                                            
                                        </a>
                                    </li>
                                    <li class="nav-item g-mx-25--lg">
                                        <a href="#" class="nav-link px-0">Comment ca marche
                                            
                                        </a>
                                    </li>
                                    <li class="nav-item g-mx-25--lg active">
                                        <a href="#" class="nav-link px-0">Shortcodes
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                   
                                    <li class="nav-item g-mx-25--lg">
                                        <a href="#" class="nav-link px-0">A propos
                                            
                                        </a>
                                    </li>
                                    <li class="nav-item g-mx-25--lg g-mr-0--lg">
                                        <a href="#" class="nav-link px-0">Nous lire
                                            
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Navigation -->
                            
                            <!-- Search -->
                            <div class="d-inline-block g-pos-abs g-top-20 g-right-65 g-pos-rel--lg g-top-0--lg g-right-0--lg g-valign-middle g-ml-30 g-ml-0--lg">
                                <a href="#" class="g-font-size-18 g-color-main" aria-haspopup="true" aria-expanded="false" aria-controls="searchform-1" data-dropdown-target="#searchform-1" data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeInUp"
                                   data-dropdown-animation-out="fadeOutDown">
                                    <i class="fa fa-search"></i>
                                </a>
                                
                                <!-- Search Form -->
                                <form id="searchform-1" class="u-searchform-v1 u-dropdown--css-animation u-dropdown--hidden g-bg-white g-pa-10 g-mt-25--lg g-mt-20--lg--scrolling">
                                    <div class="input-group g-brd-primary--focus">
                                        <input class="form-control rounded-0 u-form-control" type="search" placeholder="Enter Your Search Here...">
                                        
                                        <div class="input-group-addon p-0">
                                            <button class="btn rounded-0 btn-primary btn-md g-font-size-14 g-px-18" type="submit">Go</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Search Form -->
                            </div>
                            <!-- End Search -->
                        </nav>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            <!-- End Header -->
            <!-- End Header -->
            
            <!-- Login -->
             <br/>
             
            <?php echo $this->Session->flash(); ?>
             
            <section class="container g-pt-100 g-pb-20 g-bg-lightblue-radialgradient-ellipse">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-5 flex-md-unordered g-mb-80">
                        <div class="g-brd g-brd-none g-bg-white rounded g-px-30 g-py-50 mb-4">
                            <header class="text-center mb-4">
                                <h1 class="h3 g-color-black g-font-weight-300 text-capitalize">Inscrivez-vous</h1>
                            </header>
                                
                            <!-- Form -->
                            <form class="g-py-15" method="POST" action="/client/pu_auth">
                                <div class="mb-4">
                                    <input name="nom" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" placeholder="Nom">
                                </div>
                                <div class="mb-4">
                                    <input name="prenoms" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" placeholder="Prénoms">
                                </div>
                                <div class="mb-4">
                                    <input name="email" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="email" placeholder="votre adresse mail">
                                </div>
                    
                                <div class="g-mb-30">
                                    <input name="password" type="password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="password" placeholder="Mot de passe">
                                </div>
                    
                                <div class="g-mb-30">
                                    <input name="repass" type="password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="password" placeholder="Mot de passe">
                                </div>
                                
                          
                                <div class=" col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" required> j'accepte <a href="/client/pu_auth/terms_of_use">Les conditions d'utilisation </a>
                                        </label>
                                    </div>
                                </div>
                                 <br/>
                           
                                
                                <div class="text-center mb-5">
                                    <button name="action" value="signup" type="submit"  class="btn btn-block u-btn-primary rounded g-py-13" >S'inscrire</button>
                                </div>
                                
                                <div class="row justify-content-between mb-4">
                                    <div class="col align-self-center">
                                        <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                                            <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                            <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                                <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
                                            </div>
                                            Resté connecté
                                        </label>
                                    </div>
                                    <div class="col align-self-center text-right">
                                        <a class="g-font-size-13" href="/client/pu_auth/passerecorver">Forgot password?</a>
                                    </div>
                                </div>
                                
                              
                                <div class="d-flex justify-content-center text-center g-mb-30">
                                    <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                                    <span class="align-self-center g-color-gray-dark-v5 mx-4">OU</span>
                                    <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                                </div>
                                
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <button class="btn btn-block u-btn-facebook g-py-13 mr-2" type="button">
                                            <i class="mr-1 fa fa-facebook"></i>
                                            Facebook
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-block u-btn-twitter g-py-13 ml-2" type="button">
                                            <i class="mr-1 fa fa-twitter"></i>
                                            Twitter
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                        
                        <div class="text-center">
                            <p class="g-color-gray-dark-v5 mb-0">Don't have an account? <a class="g-font-weight-600" href="page-signup-12.html">signup</a>
                            </p>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 flex-md-first g-mb-80">
                        <div class="mb-5">
                            <br/> <br/>
                            <h2 class="h1 g-font-weight-300 mb-3">IZICHANGE</h2>
                            <p class="g-color-gray-dark-v5">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-9">
                                <!-- Icon Blocks -->
                                <div class="media mb-4">
                                    <div class="d-flex mr-3">
                                        <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                                            <i class="icon-finance-168 u-line-icon-pro"></i>
                                        </span>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h3 class="h5">Fiabilité</h3>
                                        <p class="g-color-gray-dark-v5 mb-0">Reliable contracts, multifanctionality &amp; best usage of Unify template</p>
                                    </div>
                                </div>
                                <!-- End Icon Blocks -->
                                
                                <!-- Icon Blocks -->
                                <div class="media mb-4">
                                    <div class="d-flex mr-3">
                                        <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                                            <i class="icon-finance-193 u-line-icon-pro"></i>
                                        </span>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h3 class="h5">Sécurité</h3>
                                        <p class="g-color-gray-dark-v5 mb-0">Secure &amp; integrated options to create individual &amp; business websites</p>
                                    </div>
                                </div>
                                <!-- End Icon Blocks -->
                                
                                <!-- Icon Blocks -->
                                <div class="media">
                                    <div class="d-flex mr-3">
                                        <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary">
                                            <i class="icon-finance-122 u-line-icon-pro"></i>
                                        </span>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h3 class="h5">Maintain</h3>
                                        <p class="g-color-gray-dark-v5 mb-0">We get it, you're busy and it's important that someone keeps up with marketing</p>
                                    </div>
                                </div>
                                <!-- End Icon Blocks -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Login -->
            
            <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
               "bottom": 15,
               "right": 15
               }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
                <i class="hs-icon hs-icon-arrow-top"></i>
            </a>
        </main>
        
        <div class="u-outer-spaces-helper"></div>
        
<?php require_once 'js.php';?>
        
        <!-- JS Plugins Init. -->
        <script>
            $(document).on('ready', function () {
                // initialization of tabs
                $.HSCore.components.HSTabs.init('[role="tablist"]');

                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // Form Focus State
                $.HSCore.helpers.HSFocusState.init();
            });

            $(window).on('load', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#js-header'));
                $.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    pageContainer: $('.container'),
                    breakpoint: 991
                });
            });

            $(window).on('resize', function () {
                setTimeout(function () {
                    $.HSCore.components.HSTabs.init('[role="tablist"]');
                }, 200);
            });
        </script>
        
        
        
        
        
        
        
    </body>
    
</html>
