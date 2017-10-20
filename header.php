<?php
	function seo($s) {
	 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
	 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
	 $s = str_replace($tr,$eng,$s);
	 $s = strtolower($s);
	 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
	 $s = preg_replace('/\s+/', '-', $s);
	 $s = preg_replace('|-+|', '-', $s);
	 $s = preg_replace('/#/', '', $s);
	 $s = str_replace('.', '', $s);
	 $s = trim($s, '-');
	 return $s;
	}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Kırtasiye Malzemeleri,Güvenlik Sistemleri,Fotokopi Sistemleri,Lazer Kesim">
  <meta name="keywords" content="yolbaşı,kırtasiye,lazer kesim,uv kesim,bilgisayar,copy center,güvenlik,makina parkuru,kitap,dergi,alıştırma,test,fotokopi,baskı,kalem,aöf,kartvizit,renkli baskı">
	<meta name="author" content="ayazkara" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

	<!-- Document Title
	============================================= -->
	<title>Yolbaşı Kırtasiye</title>

	<style>

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" >

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index" class="standard-logo" ><img src="images/logo.png" ></a>
						<a href="index" class="retina-logo" ><img src="images/logo@2x.png" ></a>
					</div><!-- #logo end -->
					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"><a href="index"><div>Anasayfa</div></a></li>
							<li><a href="#"><div>Ürünler</div></a>
								<ul>
									<?php
										include("ybadm/db.php");
										$cat=mysql_query("Select * from category");
										while ($cat_row=mysql_fetch_array($cat)){
									?>
									<li><a href="category/<?php echo seo($cat_row["ID"]).'/'.$cat_row["category"];?>"><div><?php echo $cat_row["category"];?></div></a></li>

								<?php } ?>
                </ul>
              </li>
              <li ><a href="about"><div>Hakkımızda</div></a></li>
              <li ><a href="contact"><div>İletişim</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
