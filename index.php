<?php
  include("header.php");
?>
<section id="slider" class="slider-parallax revslider-wrap clearfix">
    <div class="slider-parallax-inner">
      <!--
      #################################
        - THEMEPUNCH BANNER -
      #################################
      -->
      <div class="tp-banner-container rev_slider_wrapper fullscreen-container">
        <div class="tp-banner" >
          <ul>    <!-- SLIDE  -->
            <?php
              include("ybadm/db.php");
              $bac=mysql_query("Select * from background");
              while ($bac_row=mysql_fetch_array($bac)){
            ?>

            <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500"  data-delay="10000"  data-saveperformance="off"  data-title="">
              <!-- MAIN IMAGE -->
              <img src="images/slider/rev/main/<?php echo $bac_row["images"];?>"  alt="kenburns6"  data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">
              <!-- LAYERS -->
              <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
								data-x="116"
								data-y="260"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap; color:white;"><?php echo $bac_row["title"];?></div>
            </li>
          <?php } ?>
          </ul>

        </div>
      </div>
    </div>
  </section>

<?php
  include("footer.php");
?>
