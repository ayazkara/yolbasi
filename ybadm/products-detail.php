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
        <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
          <div class="thumbnail">
            <div class="thumb-preview">
              <a class="thumb-image" href="../images/shop/<?php echo $pr_row["images"];?>">
                <img src="../images/shop/<?php echo $pr_row["images"];?>" class="img-responsive" alt="Project">
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
    <div class="col-md-12">
    <form  class="form-horizontal mb-lg" action="products-in.php?islem=insert" method="post" >
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Adı</label>
        <div class="col-sm-9">
          <input type="text" name="name" class="form-control" value="<?php echo $pr_row["title"];?>" required >
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
							<option value="<?php echo $cat_row["category"];?>" <?php if($cat_row["category"]==$pr_row["category"]){ echo "selected";} ?>> <?php echo $cat_row["category"];?></option>
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
        <input type="submit" class="btn btn-primary" Value="Kaydet"/>
      </div>
    </div>
  </footer>
  </form>
</div>
</section>
<?php
  include("footer.php");
?>
