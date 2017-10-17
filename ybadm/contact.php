<?php
 include("header.php");
 include("db.php");
 $con=mysql_query("Select * From contact");
 $con_row=mysql_fetch_array($con);
?>
<section role="main" class="content-body">
  <header class="page-header">
    <h2>İletişim</h2>

  </header>

  <div class="row">
		<div class="col-xs-12">
			 <section class="panel">
					<header class="panel-heading">
							<div class="panel-actions">
							</div>
							<h2 class="panel-title"></h2>
							<p class="panel-subtitle"></p>
					</header>
					<div class="panel-body">
						<div class="form-body">
								<form class="form-horizontal form-bordered" method="POST" action="contact-in.php" >
									<div class="form-group">
										<label class="col-md-3 control-label">Telefon</label>
										<div class="col-md-6 control-label">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-phone"></i>
												</span>
												<input id="phone" name="phone" value="<?php echo $con_row["phone"];?>" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(123) 123-1234" class="form-control" required>
											</div>
										</div>
									</div>
                  <div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">E-mail</label>
												<div class="col-md-6">
													<input type="text" name="mail" value="<?php echo $con_row["mail"];?>" class="form-control" id="inputDefault" required>
												</div>
								  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label" for="inputDefault">Adres</label>
                       <div class="col-md-6">
                         <input type="text" name="adres" value="<?php echo $con_row["adres"];?>"class="form-control" id="inputDefault" required>
                       </div>
                 </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label" for="inputDefault">Harita</label>
                       <div class="col-md-6">
                         <input type="text" name="maps" value="<?php echo $con_row["maps"];?>"class="form-control" id="inputDefault" required>
                       </div>
                 </div>
                 <div class="form-group">
                   <div class="col-md-4" ></div>
                   <div class="col-md-4" ></div>
                   <div class="col-md-4" >
                     <input type="submit" class="mb-xs mt-xs mr-xs btn btn-primary" value="Kaydet">
                   </div>
                </div>
                </form>
						</div>
					</div>
				</section>
			</div>
		</div>
<?php
 include("footer.php");
?>
