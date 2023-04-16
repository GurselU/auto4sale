<script type="text/javascript">
  (function($) {
    "use strict";

    var tpj = jQuery;
    var revapi3;
    tpj(document).ready(function() {
      if (tpj("#rev_slider_3_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_3_1");
      } else {
        revapi3 = tpj("#rev_slider_3_1").show().revolution({
          sliderType: "standard",
          sliderLayout: "fullwidth",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "off",
            arrows: {
              style: "zeus",
              enable: true,
              hide_onmobile: false,
              hide_onleave: false,
              tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 20,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 20,
                v_offset: 0
              }
            }
          },
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: 1270,
          gridheight: 700,
          lazyType: "none",
          shadow: 0,
          spinner: "spinner3",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }
    });
  })(jQuery);


  // availability check

  document.getElementById('availabledate').valueAsDate = new Date();

  function showDate() {
    let checker = document.getElementById('checker');
    let dateAvailable = document.getElementById('availabledate');
    if (checker.checked == true) {
      dateAvailable.hidden = false;
    } else {
      dateAvailable.hidden = true;
    }
  }
  // availability check

  // form check




  // form check

</script>