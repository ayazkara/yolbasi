<?php
 include("header.php");
 include("db.php");
?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Kategoriler</h2>

					</header>
					<!-- start: page -->
          <section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>

								<h2 class="panel-title"></h2>
							</header>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-condensed mb-none">
										<thead>
											<tr>
												<th>Kategoriler</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
                      <?php
                        $cat=mysql_query("Select * from category");
                        while ($cat_row=mysql_fetch_array($cat)){
                      ?>
											<tr>
												<td><?php echo $cat_row["category"];?></td>
												<td>
                          <a href="#"><i class="fa fa-pencil"></i></a>
                          <a href="#"><i class="fa fa-trash-o"></i></a>
                        </td>
											</tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </section>
					<!-- end: page -->
					<?php
					 include("footer.php");
					?>
