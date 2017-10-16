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
												<th><a class="modal-with-form btn btn-default" href="#cat-in"><i class="fa fa-plus"></i></th>
                        <!-- cat  Form -->
                            <div id="cat-in" class="modal-block modal-block-primary mfp-hide">
                              <section class="panel">
                                <header class="panel-heading">
                                  <h2 class="panel-title">Kategori Ekle</h2>
                                </header>
                                <div class="panel-body">
                                  <form  class="form-horizontal mb-lg" action="category-in.php?islem=insert" method="post" >
                                    <div class="form-group mt-lg">
                                      <label class="col-sm-3 control-label">Kategori</label>
                                      <div class="col-sm-9">
                                        <input type="text" name="category" class="form-control" placeholder="Kategori Yazınız...." required />
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                <footer class="panel-footer">
                                  <div class="row">
                                    <div class="col-md-12 text-right">
                                      <input type="submit" class="btn btn-primary" Value="Kaydet"/>
                                      <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                  </div>
                                </footer>
                              </section>
                            </div>
                            <!-- cat Form -->
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
                          <a href="javascript:confirmuserDelete('category-in.php?islem=Del&ID=<?php echo $cat_row["ID"];?>')"><i class="fa fa-trash-o"></i></a>
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
          <script>
function confirmuserDelete(delUrl) {
  if (confirm("Silmek İstediğinize Eminmisiniz ?")) {
    document.location = delUrl;
  }
}
</script>
