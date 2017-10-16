<?php
 include("header.php");
?>
<section role="main" class="content-body">
  <header class="page-header">
    <h2>Galeri</h2>

  </header>
  <div class="row">
			<div class="col-xs-12">
					<section class="panel">
							<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											<a href="#" class="fa fa-times"></a>
										</div>

										<h2 class="panel-title">Galeri Upload</h2>
							</header>
			  		   <div class="panel-body">
										<form action="gallery-upload.php" class="dropzone dz-square" id="dropzone-example"></form>
								</div>
						</section>
				</div>
	 </div>

   <!-- start: page -->
					<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
						<div class="content-with-menu-container">
							<div class="inner-body mg-main">
								<div class="row mg-files" data-sort-destination data-sort-id="media-gallery">

									<div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image" href="../pic/gallery/1.jpg">
													<img src="../pic/gallery/1.jpg" class="img-responsive" alt="Project">
												</a>
												<div class="mg-thumb-options">
													<div class="mg-zoom"><i class="fa fa-search"></i></div>
													<div class="mg-toolbar">
														<div class="mg-option checkbox-custom checkbox-inline">
															<i class="fa fa-trash-o"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>

                    <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
  										<div class="thumbnail">
  											<div class="thumb-preview">
  												<a class="thumb-image" href="../pic/gallery/2.jpg">
  													<img src="../pic/gallery/2.jpg" class="img-responsive" alt="Project">
  												</a>
  												<div class="mg-thumb-options">
  													<div class="mg-zoom"><i class="fa fa-search"></i></div>
  													<div class="mg-toolbar">
  														<div class="mg-option checkbox-custom checkbox-inline">
  															<i class="fa fa-trash-o"></i> Delete</a>
  														</div>
  													</div>
  												</div>
  											</div>
  											</div>
  										</div>

                    

									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- end: page -->

<?php
 include("footer.php");
?>
