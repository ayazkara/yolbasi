<footer id="footer" class="dark">

  <div id="copyrights">

    <div class="container clearfix">

      <div class="col_half">
        Copyrights &copy; 2017 All Rights Reserved by AYAZKARA<br>

      </div>

      <div class="col_half col_last tright">
        <div class="fright clearfix">

        </div>
        <?php
          include("ybadm/db.php");
          $con=mysql_query("Select * from contact");
          $con_row=mysql_fetch_array($con);
        ?>
        <div class="clear"></div>

        <?php echo $con_row["mail"];?> <span class="middot">&middot;</span>  <?php echo $con_row["phone"];?>
      </div>

    </div>

  </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">

		jQuery(document).ready(function($){

			$('.portfolio-container').pajinate({
				items_per_page : 9,
				item_container_id : '#portfolio',
				nav_panel_id : '.pagination-container ul',
				show_first_last: false
			});

			$( '.pagination a' ).click(function() {
				var t=setTimeout(function(){ $( '.flexslider .slide' ).resize(); },1000);
			});

		});

	</script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

<script type="text/javascript">

var tpj=jQuery;
tpj.noConflict();

tpj(document).ready(function() {

  var apiRevoSlider = tpj('.tp-banner').show().revolution(
  {
    sliderType:"standard",
    jsFileLocation:"include/rs-plugin/js/",
    sliderLayout:"fullscreen",
    dottedOverlay:"none",
    delay:9000,
    responsiveLevels:[1200,992,768,480,320],
    startwidth:1140,
    startheight:600,
    hideThumbs:200,

    thumbWidth:100,
    thumbHeight:50,
    thumbAmount:3,

    navigation: {
      keyboardNavigation:"off",
      keyboard_direction: "horizontal",
      mouseScrollNavigation:"off",
      onHoverStop:"off",
      touch:{
        touchenabled:"on",
        swipe_threshold: 75,
        swipe_min_touches: 1,
        swipe_direction: "horizontal",
        drag_block_vertical: false
      },
      arrows: {
                    style: "hermes",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    }
                }
    },

    touchenabled:"on",
    onHoverStop:"on",

    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,


    parallax:"mouse",
    parallaxBgFreeze:"on",
    parallaxLevels:[8,7,6,5,4,3,2,1],
    parallaxDisableOnMobile:"on",

    keyboardNavigation:"on",

    shadow:0,
    fullWidth:"off",
    fullScreen:"on",

    spinner:"spinner0",

    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,

    shuffle:"off",


    forceFullWidth:"off",
    fullScreenAlignForce:"off",
    minFullScreenHeight:"400",

    hideThumbsOnMobile:"off",
    hideNavDelayOnMobile:1500,
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"off",
    hideThumbsUnderResolution:0,

    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0,
    fullScreenOffset:"0px"
  });

  apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
    setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
  });

  apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
    SEMICOLON.slider.revolutionSliderMenu();
  });

}); //END REVOLUTION SLIDER

</script>

</body>
</html>
