
  <!-- JS Global Compulsory -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-migrate/jquery-migrate.min.js"> </script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/popper.js/popper.min.js"> </script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/bootstrap/offcanvas.js"></script>
  <!-- JS Implementing Plugins -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/fancybox/jquery.fancybox.min.js"></script>
 
  <!-- JS Implementing Plugins -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

  <!-- JS Unify -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/hs.core.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.header.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/helpers/hs.hamburgers.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.tabs.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/components/hs.go-to.js"></script>
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/helpers/hs.focus-state.js"></script>

  <!-- JS Customization -->
  <script src="<?php echo  BASE_URL_THEME; ?>assets/js/custom.js"></script>
  
   <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');

      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');

      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
        afterOpen: function(){
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of masonry
      $('.masonry-grid').imagesLoaded().then(function () {
        $('.masonry-grid').masonry({
          columnWidth: '.masonry-grid-sizer',
          itemSelector: '.masonry-grid-item',
          percentPosition: true
        });
      });

      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox');
    });

    $(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');
    });
  </script>