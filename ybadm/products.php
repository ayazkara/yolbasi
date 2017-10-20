<?php
 include("header.php");
 include("db.php");
?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Ürünler</h2>

					</header>
<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
								</div>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th></th>
											<th>Başlık</th>
                      <th>Kategori</th>
											<th><a class="btn btn-default" href="products-insert.php"><i class="fa fa-plus"></i></a></th>
										</tr>
									</thead>
									<tbody>
                      <?php
                        $pr=mysql_query("Select * from products ORDER BY ID desc");
                        while($pr_row=mysql_fetch_array($pr)){
                          $ID=$pr_row["ID"];
                          $img=mysql_query("Select count(0) from products_img where products_ID='$ID' ");
                          $img_row=mysql_fetch_array($img);
                          $img1=mysql_query("Select * from products_img where products_ID='$ID' ");
                          $img_row1=mysql_fetch_array($img1);
                      ?>
										<tr class="gradeX">
											<td>
                        <div class="zoom-gallery">
                          <a class="pull-left" href="../images/shop/<?php if ($img_row[0]==0){echo $pr_row["images"];}else{ echo $img_row1["images"]; }?>">
                            <img  src="../images/shop/<?php if ($img_row[0]==0){echo $pr_row["images"];}else{ echo $img_row1["images"];}?>" width=25px>
                          </a>
                        </div>
                      </td>
                      <td><?php echo $pr_row["title"];?></td>
                      <td>
                        <?php
                        $cat_ID=$pr_row["category"];
                        $query=mysql_query("Select * from category where ID='$cat_ID'");
                        $row=mysql_fetch_array($query);
                        echo $row["category"];
                        ?>
                      </td>
                      <td>
                        <a class="btn btn-default" href="products-detail.php?ID=<?php echo $pr_row["ID"];?>"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-default" href="javascript:confirmuserDelete('products-in.php?islem=Del&ID=<?php echo $pr_row["ID"];?>')"><i class="fa fa-trash-o"></i></a>
                      </td>
										</tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </section>
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
