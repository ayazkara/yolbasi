<?php
 include("header.php");
?>
<!-- Page Title
  ============================================= -->
  <section id="page-title" class="page-title-parallax page-title-dark page-title-right" style="padding:50px 0; background-image: url('images/slider/rev/main/s2-bg.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.2">

    <div class="container clearfix">
      <h3 style="color:white;">Yolbaşı Kırtasiye</h3>

    </div>

  </section><!-- #page-title end -->
  <section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col-md-3">
              <?php
                include("ybadm/db.php");
                $con=mysql_query("Select * from contact");
                $con_row=mysql_fetch_array($con);
              ?>
              <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Adres:</strong><br>
										  <?php echo $con_row["adres"];?>
									</address>
									<abbr ><strong>Tel:</strong></abbr>   <?php echo $con_row["phone"];?><br>
									<abbr ><strong>Email:</strong></abbr>   <?php echo $con_row["mail"];?>
								</div>
						</div>
            <div class="col-md-9">
              <iframe src="  <?php echo $con_row["maps"];?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>


					</div>

				</div>
      </div>
    </section>
<?php
  include("footer.php");
?>
