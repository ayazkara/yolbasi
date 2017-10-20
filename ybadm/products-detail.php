<?php
 include("header.php");
 include("db.php");
 $ID=$_GET["ID"];
 $pr=mysql_query("Select * from products where ID='$ID'");
 $pr_row=mysql_fetch_array($pr);
?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Ürün Güncelle</h2>

					</header>
<section class="panel">
  <div class="panel-body">
      <div class="col-md-4">
        <div class="panel-body">
            <form action="products-in.php?islem=img&ID=<?php echo $pr_row["ID"];?>" class="dropzone dz-square" id="dropzone-example"></form>
        </div>
      </div>
      <div class="col-md-8">
        <?php
          $ID=$pr_row["ID"];
          $img=mysql_query("Select * from products_img where products_ID='$ID'");
          while ($img_row=mysql_fetch_array($img)){
        ?>
        <div class="col-md-2">
          <div class="zoom-gallery">
              <a class="pull-left" href="../images/shop/<?php echo $img_row["images"];?>">
                <img src="../images/shop/<?php echo $img_row["images"];?>" width="100px" height="100px">
              </a>
          </div>
          <a href="products-in.php?islem=imgdel&ID=<?php echo $img_row["ID"];?>&pID=<?php echo $img_row["products_ID"];?>"><i class="fa fa-trash-o"></i>Delete</a>
        </div>
      <?php } ?>
      </div>
    <div class="col-md-12">
    <form  class="form-horizontal mb-lg" action="products-in.php?islem=update" method="post" >
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Adı</label>
        <div class="col-sm-9">
          <input type="text" name="name" class="form-control" value="<?php echo $pr_row["title"];?>" required >
            <input type="hidden" name="ID" class="form-control" value="<?php echo $pr_row["ID"];?>" required >
        </div>
      </div>
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Kategoriler</label>
        <div class="col-sm-9">
          <select class="form-control mb-md" name="category" required>
              <option></option>
            <?php
              $cat=mysql_query("Select * from category");
              while ($cat_row=mysql_fetch_array($cat)){
            ?>
							<option value="<?php echo $cat_row["ID"];?>" <?php if($cat_row["ID"]==$pr_row["category"]){ echo "selected";} ?>> <?php echo $cat_row["category"];?></option>
						<?php } ?>
					</select>
        </div>
      </div>
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Açıklama</label>
        <div class="col-sm-9">
          <textarea class="summernote" name="content" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }' ><?php echo $pr_row["content"];?></textarea>
        </div>
      </div>
  </div>
  <footer class="panel-footer">
    <div class="row">
      <div class="col-md-12 text-right">
        <input type="submit" class="btn btn-primary" Value="Güncelle"/>
      </div>
    </div>
  </footer>
  </form>
</div>
</section>
<?php
  include("footer.php");
?>
