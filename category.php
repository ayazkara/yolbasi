<?php
 include("header.php");
 $category=$_GET["category"];
?>
<!-- Page Title
  ============================================= -->
  <section id="page-title">

    <div class="container clearfix">
      <h1><?php echo $category;?></h1>
      <ol class="breadcrumb">
        <li><a href="index.php">Anasayfa</a></li>
        <li class="active"><?php echo $category;?></li>
      </ol>
    </div>

  </section><!-- #page-title end -->



  <section id="content">

  <div class="content-wrap">

    <div class="container clearfix">

      <div class="portfolio-container">

        <!-- Portfolio Items
        ============================================= -->
        <div class="col-md-3">
        <div class="sidebar nobottommargin">
            <div class="sidebar-widgets-wrap">

              <div class="widget widget_links clearfix">

                <h4>Kategori</h4>
                <ul>
                  <?php
                    include("ybadm/db.php");
                    $cat=mysql_query("Select * from category");
                    while ($cat_row=mysql_fetch_array($cat)){
                  ?>
                  <li><a href="category.php?category=<?php echo $cat_row["category"];?>"><div><?php echo $cat_row["category"];?></div></a></li>
                <?php }?>
                </ul>

              </div>
          </div>
        </div>
        </div>

        <div class="col-md-9">
        <div class="postcontent nobottommargin col_last">
        <div id="shop" class="shop product-3 clearfix">
        <div id="portfolio" class="portfolio clearfix">

          <?php
            include("ybadm/db.php");
            $pr=mysql_query("Select * from products where category='$category'");
            while ($pr_row=mysql_fetch_array($pr)){
              $ID=$pr_row["ID"];
              $img=mysql_query("Select * from products_img where products_ID='$ID' ");
              $img_row=mysql_fetch_array($img);
          ?>
              <div class="product clearfix">
								<div class="product-image">
									<a href="category-detail.php?ID=<?php echo $pr_row["ID"];?>"><img src="images/shop/<?php if ($img_row[0]>0){ echo $img_row["images"];}else{ echo $pr_row["images"];}?>" style="width=250px; height:250px;"></a>
								</div>
								<div class="product-desc center">
									<div class="product-title"><h3><a href="category-detail.php?ID=<?php echo $pr_row["ID"];?>"><?php echo $pr_row["title"]; ?></a></h3></div>
								</div>
							</div>
          <?php } ?>
            </div>
        </div><!-- #portfolio end -->
      </div>
    </div>

        <div class="pagination-container topmargin nobottommargin">

          <ul class="pagination nomargin"></ul>

        </div>


      </div>


    </div>

  </div>

</section><!-- #content end -->
<?php
  include("footer.php");
?>
