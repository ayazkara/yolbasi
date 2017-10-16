<?php
 include("header.php");
 include("ybadm/db.php");
 $ab=mysql_query("Select * from about");
 $ab_row=mysql_fetch_array($ab);
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

						<div class="col-md-12">

							<h3>Hakkımızda</h3>

							<p><?php echo $ab_row["about"]; ?></p>

						</div>



					</div>

				</div>
      </div>
    </section>
<?php
  include("footer.php");
?>
