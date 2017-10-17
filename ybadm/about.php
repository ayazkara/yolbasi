<?php
 include("header.php");
 include("db.php");
 $ab=mysql_query("Select * from about");
  $ab_row=mysql_fetch_array($ab);
?>
<section role="main" class="content-body">
  <header class="page-header">
    <h2>Hakkımızda</h2>

  </header>
  <div class="row">
							<div class="col-xs-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
										</div>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" action="about-in.php" method="post">
											<div class="form-group">
												<div class="col-md-12">
                          <textarea class="summernote" name="about" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $ab_row["about"];?></textarea>
												</div>
											</div>
                      <div class="form-group">
                        <div class="col-md-10"></div>
												<div class="col-md-2">
													<input type="submit" class="mb-xs mt-xs mr-xs btn btn-primary" value="Kaydet">
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</div>
<?php
 include("footer.php");
?>
