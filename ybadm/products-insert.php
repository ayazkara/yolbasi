<?php
 include("header.php");
 include("db.php");
?>

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Ürün Ekle</h2>

					</header>
<section class="panel">
  <div class="panel-body">
    <form  class="form-horizontal mb-lg" action="products-in.php?islem=insert" method="post" >
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Adı</label>
        <div class="col-sm-9">
          <input type="text" name="name" class="form-control" placeholder="Başlık Yazınız...." required >
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
							<option value="<?php echo $cat_row["ID"];?>"><?php echo $cat_row["category"];?></option>
						<?php } ?>
					</select>
        </div>
      </div>
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Açıklama</label>
        <div class="col-sm-9">
          <textarea class="summernote" name="content" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }' ></textarea>
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
</section>
<?php
  include("footer.php");
?>
