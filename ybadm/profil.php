<?php
 include("header.php");
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
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
							</div>
							<h2 class="panel-title"></h2>
							<p class="panel-subtitle"></p>
					</header>
					<div class="panel-body">
						<div class="form-body">
								<form class="form-horizontal form-bordered" method="POST" action="profil-in.php" >
                  <div class="form-group">
											<label class="col-md-3 control-label" for="inputDefault">Kullanıcı Adı</label>
												<div class="col-md-6">
													<input type="text" name="user" class="form-control" id="inputDefault" disabled value="ayazkara">
                          <input type="hidden" name="ID" class="form-control" id="inputDefault" disabled value="ayazkara">
												</div>
								  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label" for="inputDefault">Ad Soyad</label>
                       <div class="col-md-6">
                         <input type="text" name="name" class="form-control" id="inputDefault" disabled value="Ayaz KARA">
                       </div>
                 </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label" for="inputDefault">Şifre</label>
                       <div class="col-md-6">
                         <input type="password" name="pass" class="form-control" id="inputDefault" required>
                       </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label" for="inputDefault">Şifre Onay</label>
                       <div class="col-md-6">
                         <input type="password" name="pass1" class="form-control" id="inputDefault" required>
                       </div>
                  </div>
                 <div class="form-group">
                   <div class="col-md-4" ></div>
                   <div class="col-md-4" ></div>
                   <div class="col-md-4" >
                     <input type="submit" class="mb-xs mt-xs mr-xs btn btn-primary" value="Güncelle">
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
