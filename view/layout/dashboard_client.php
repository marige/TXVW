
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
    <meta property="og:image" content="https://izichange.com/theme3/images/photo.jpg"> 
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>TAXI AT THE PIER</title>
    <meta name="description" content="Plateforme d'échange de devises certifiée"/>
   <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo  BASE_URL_THEME; ?>assets/favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/icon-hs/style.css">

  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/hs-admin-icons/hs-admin-icons.css">

  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/animate.css">
  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">

  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/flatpickr/dist/css/flatpickr.min.css">
  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/bootstrap-select/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/chartist-js/chartist.min.css">
  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/fancybox/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/css/unify-admin.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/css/custom.css">
</head>
<body>
    <!-- Header -->
    <header id="js-header" class="u-header u-header--sticky-top">
        <div class="u-header__section u-header__section--admin-dark g-min-height-65">
            <nav class="navbar no-gutters g-pa-0">
                <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
                    <!-- Logo -->
                        
                    <a href="" class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5 u-header-logo"> 
                        TAXI AT THE PIER</a>
                    <!-- End Logo -->
                    
                    <!-- Sidebar Toggler -->
                    <a class="js-side-nav u-header__nav-toggler d-flex align-self-center ml-auto" href="#" data-hssm-class="u-side-nav--mini u-sidebar-navigation-v1--mini" data-hssm-body-class="u-side-nav-mini" data-hssm-is-close-all-except-this="true" data-hssm-target="#sideNav">
                        <i class="hs-admin-align-left"></i>
                    </a>
                    <!-- End Sidebar Toggler -->
                </div>
                
                
                <!-- Messages/Notifications/Top Search Bar/Top User -->
                <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
                    
                    
                    <!-- Top Notifications -->
                    <div class="g-pos-rel g-hidden-sm-down">
                        <a id="notificationsInvoker" class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="#" aria-controls="notificationsMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click"
                           data-dropdown-target="#notificationsMenu" data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                            <i class="hs-admin-bell g-absolute-centered"></i>
                        </a>
                        
                        <!-- Top Notifications List -->
                        <div id="notificationsMenu" class="js-custom-scroll g-absolute-centered--x g-width-340 g-max-width-400 g-height-400 g-mt-17 rounded" aria-labelledby="notificationsInvoker">
                            <div class="media text-uppercase u-header-dropdown-bordered-v1 g-pa-20">
                                <h4 class="d-flex align-self-center g-font-size-default g-letter-spacing-0_5 g-mr-20 g-mb-0">Notifications</h4>
                            </div>
                            
                        </div>
                        <!-- End Top Notifications List -->
                    </div>
                    <!-- End Top Notifications -->
                    
                    <!-- Top User -->
                    <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                        <div class="g-pos-rel g-px-10--lg">
                            <a id="profileMenuInvoker" class="d-block" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
                               data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                                <span class="g-pos-rel">
                                    <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-secondary g-mr-5"></span>
                                    <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm" <img id="logo_img" style="height:60px" class="img-responsive" src="<?php echo  BASE_URL_THEME; ?>assets/img/logo.png" alt="TAXI AT THE PEER">
                                </span>
                                <span class="g-pos-rel g-top-2">
                                    <span class="g-hidden-sm-down"><?php if(isset($_SESSION['clientInfoEmail'])) {echo $_SESSION['clientInfoEmail'];} ?></span>
                                    <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                                </span>
                            </a>
                            
                            <!-- Top User Menu -->
                            <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">
                                <li class="g-hidden-sm-up g-mb-10">
                                    <a class="media g-py-5 g-px-20" href="#">
                                        <span class="d-flex align-self-center g-pos-rel g-mr-12">
                                            <span class="u-badge-v1 g-top-minus-3 g-right-minus-3 g-width-18 g-height-18 g-bg-secondary g-font-size-10 g-color-white rounded-circle p-0">10</span>
                                            <i class="hs-admin-comment-alt"></i>
                                        </span>
                                        <span class="media-body align-self-center">Unread Messages</span>
                                    </a>
                                </li>
                                <li class="g-hidden-sm-up g-mb-10">
                                    <a class="media g-py-5 g-px-20" href="#">
                                        <span class="d-flex align-self-center g-mr-12">
                                            <i class="hs-admin-bell"></i>
                                        </span>
                                        <span class="media-body align-self-center">Notifications</span>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="media g-color-primary--hover g-py-5 g-px-20" href="/client/pu_profil">
                                        <span class="d-flex align-self-center g-mr-12">
                                            <i class="hs-admin-user"></i>
                                        </span>
                                        <span class="media-body align-self-center">My Profile</span>
                                    </a>
                                </li>
                                
                                <li class="mb-0">
                                    <a class="media g-color-primary--hover g-py-5 g-px-20" href="/client/pu_disconnect">
                                        <span class="d-flex align-self-center g-mr-12">
                                            <i class="hs-admin-shift-right"></i>
                                        </span>
                                        <span class="media-body align-self-center">Sign Out</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Top User Menu -->
                        </div>
                    </div>
                    <!-- End Top User -->
                </div>
                <!-- End Messages/Notifications/Top Search Bar/Top User -->
                
                
            </nav>
            
        </div>
    </header>
    <!-- End Header -->
    
    
    <main class="container-fluid px-0 g-pt-65">
        <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
            <!-- Sidebar Nav -->
            <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
                <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
                    
                    <!-- Metrics -->
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="/client/pu_order">
                            <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                                <i class="hs-admin-user"></i>
                            </span>
                            <span class="media-body align-self-center">Order</span>
                        </a>
                    </li>
                    <!-- End Metrics -->
                    
                    <!-- UI Components -->
                    <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                        <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#" data-hssm-target="#subMenu5">
                            <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                                <i class="hs-admin-check-box"></i>
                            </span>
                            <span class="media-body align-self-center">MY TRANSACTIONS</span>
                            <span class="d-flex align-self-center u-side-nav--control-icon">
                                <i class="hs-admin-angle-right"></i>
                            </span>
                            <span class="u-side-nav--has-sub-menu__indicator"></span>
                        </a>
                        
                        <!-- UI Components: Submenu -->
                        <ul id="subMenu5" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                            <!-- Icons -->
                            <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                                <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/client/pu_liste">
                                    <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                        <i class="hs-admin-blackboard"></i>
                                    </span>
                                    <span class="media-body align-self-center">List of transactions</span>
                                </a>
                            </li>
                            <!-- End Icons -->
                            <!-- Icons -->
                            <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                                <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/client/">
                                    <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                        <i class="hs-admin-wallet"></i>
                                    </span>
                                    <span class="media-body align-self-center">On going transactions</span>
                                </a>
                            </li>
                            <!-- End Icons -->
                             <!-- Icons --> 
                            <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                                <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/client/">
                                    <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                        <i class="hs-admin-wand"></i>
                                    </span>
                                    <span class="media-body align-self-center">Liste of favorits</span>
                                </a>
                            </li>
                            <!-- End Icons -->
                        </ul>
                        <!-- End UI Components: Submenu -->
                    </li>
                    <!-- End UI Components -->
           
                </ul>
            </div>
            <!-- End Sidebar Nav -->
            
  <!-- JS Global Compulsory -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/popper.js/popper.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/cookiejs/jquery.cookie.js"></script>


  <!-- jQuery UI Core -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/widget.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/version.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/keycode.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/position.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/unique-id.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/safe-active-element.js"></script>

  <!-- jQuery UI Helpers --> 
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>

  <!-- jQuery UI Widgets -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>
  <!-- JS Plugins Init. -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/appear.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/chartist-js/chartist.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <!-- JS Unify -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/hs.core.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.side-nav.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/helpers/hs.hamburgers.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.range-datepicker.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.datepicker.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.dropdown.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.scrollbar.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.area-chart.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.donut-chart.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.bar-chart.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/helpers/hs.focus-state.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.popup.js"></script>

  <!-- JS Custom -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of custom select
      $('.js-select').selectpicker();

      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav', {
        afterOpen: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        },
        afterClose: function() {
          setTimeout(function() {
            $.HSCore.components.HSAreaChart.init('.js-area-chart');
            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
            $.HSCore.components.HSBarChart.init('.js-bar-chart');
          }, 400);
        }
      });

      

      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

     
    });
  </script>
            
            <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
                <div class="g-pa-20">
         <?php  echo $content_for_layout;  ?>
                </div>
                
                <!-- Footer -->
                <footer id="footer" class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
                    <div class="row align-items-center">
                        <!-- Footer Nav -->
                        <div class="col-md-4 g-mb-10 g-mb-0--md">
                            <ul class="list-inline text-center text-md-left mb-0">
                                <li class="list-inline-item">
                                    <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#">FAQ</a>
                                </li>
                                <li class="list-inline-item">
                                    <span class="g-color-gray-dark-v6">|</span>
                                </li>
                                <li class="list-inline-item">
                                    <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="/client/pu_auth#contact">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <span class="g-color-gray-dark-v6">|</span>
                                </li>
                                <li class="list-inline-item">
                                    <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="/client/pu_auth#contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Nav -->
                        
                        <!-- Footer Socials -->
                        <div class="col-md-4 g-mb-10 g-mb-0--md">
                            <ul class="list-inline g-font-size-16 text-center mb-0">
                                <li class="list-inline-item g-mx-10">
                                    <a href="#" class="g-color-facebook g-color-secondary--hover">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-10">
                                    <a href="#" class="g-color-google-plus g-color-secondary--hover">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-10">
                                    <a href="#" class="g-color-black g-color-secondary--hover">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item g-mx-10">
                                    <a href="#" class="g-color-twitter g-color-secondary--hover">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Socials -->
                        
                        <!-- Footer Copyrights -->
                        <div class="col-md-4 text-center text-md-right">
                            <small class="d-block g-font-size-default">&copy; 2019 TAXI AT THE PIER. All Rights Reserved.</small>
                        </div>
                        <!-- End Footer Copyrights -->
                    </div>
                </footer>
                <!-- End Footer -->
            </div>
        </div>
    </main>
    

</body>

</html>