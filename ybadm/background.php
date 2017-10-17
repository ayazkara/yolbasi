<?php
 include("header.php");
 include("db.php");
?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Arka Plan</h2>

					</header>
					<!-- start: page -->
          <section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
								</div>

								<h2 class="panel-title"></h2>
							</header>
							<div class="panel-body">
                <div class="panel-body">
 										<form action="background-in.php?islem=images" class="dropzone dz-square" id="dropzone-example"></form>
 								</div>
								<div class="table-responsive">
									<table class="table table-bordered table-striped table-condensed mb-none">
										<thead>
											<tr>
												<th>Arka Planlar</th>
                        <th>Başlık</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
                      <?php
                        $bac=mysql_query("Select * from background");
                        while ($bac_row=mysql_fetch_array($bac)){
                      ?>
											<tr>
												<td><a href="../images/slider/rev/main/<?php echo $bac_row["images"];?>" target="_blank"><img src="../images/slider/rev/main/<?php echo $bac_row["images"];?>" style="width:100px; height:auto"></a></td>
                        <td><?php echo $bac_row["title"];?></td>
												<td>
                          <a class="modal-with-form btn btn-default" href="#title<?php echo $bac_row["ID"];?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-default" href="javascript:confirmuserDelete('background-in.php?islem=Del&ID=<?php echo $bac_row["ID"];?>')"><i class="fa fa-trash-o"></i></a>
                          <!-- Title Form -->
                              <div id="title<?php echo $bac_row["ID"];?>" class="modal-block modal-block-primary mfp-hide">
                                <section class="panel">
                                  <header class="panel-heading">
                                    <h2 class="panel-title">Background Detay</h2>
                                  </header>
                                  <div class="panel-body">
                                    <form  class="form-horizontal mb-lg" action="background-in.php?islem=title" method="post" >
                                      <div class="form-group mt-lg">
                                        <label class="col-sm-3 control-label">Title</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="title" class="form-control" placeholder="Başlık Yazınız...." required value="<?php echo $bac_row["title"];?>">
                                          <input type="hidden" name="ID" class="form-control" value="<?php echo $bac_row["ID"];?>">
                                        </div>
                                      </div>

                                  </div>
                                  <footer class="panel-footer">
                                    <div class="row">
                                      <div class="col-md-12 text-right">
                                        <input type="submit" class="btn btn-primary" Value="Kaydet"/>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                      </div>
                                    </div>
                                  </footer>
                                  </form>
                                </section>
                              </div>
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
