<?php
  include("header.php");
  $ID=$_GET["ID"];
  include("db.php");
  $pr=mysql_query("Select * from products where ID='$ID'");
  $pr_row=mysql_fetch_array($pr);
  $img=mysql_query("Select * from products_img where products_ID='$ID' ");

?>
<!-- Page Title
  ============================================= -->
  <section id="page-title">

    <div class="container clearfix">
      <h1><?php echo $pr_row["title"];?></h1>
    </div>

  </section><!-- #page-title end -->

  <!-- Content
  ============================================= -->
  <section id="content">

    <div class="content-wrap">

      <div class="container clearfix">
        <div class="col-md-3">
                <div class="sidebar nobottommargin clearfix">
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

        <div class="postcontent nobottommargin clearfix col_last">

          <div class="single-product">

            <div class="product">

              <div class="col_half">

                <!-- Product Single - Gallery
                ============================================= -->
                <div class="product-image">
                  <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                    <div class="flexslider">
                      <div class="slider-wrap" data-lightbox="gallery">
                        <?php while ($img_row=mysql_fetch_array($img)){?>
                        <div class="slide" data-thumb="images/shop/<?php echo $img_row["images"];?>"><a href="images/shop/<?php echo $img_row["images"];?>"  data-lightbox="gallery-item"><img src="images/shop/<?php echo $img_row["images"];?>" ></a></div>
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                </div><!-- Product Single - Gallery End -->

              </div>

              <div class="col_half col_last product-desc">



                <div class="clear"></div>
                <div class="line"></div>


                <!-- Product Single - Short Description
                ============================================= -->
                <?php echo $pr_row["content"];?>


              </div>


            </div>

          </div>

          <div class="line"></div>

          <div class="col_full nobottommargin">

            <h4>Diğer Ürünler</h4>

            <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-lg="4">
              <?php
                $category=$pr_row["category"];
                $rs=mysql_query("Select * from products where ID!='$ID' and  category='$category' order by rand() Limit 6");
                while ($rs_row=mysql_fetch_array($rs)){
                  $ID=$rs_row["ID"];
                  $img1=mysql_query("Select * from products_img where products_ID='$ID' ");
                  $img_row1=mysql_fetch_array($img1);
              ?>
              <div class="oc-item">
                <div class="product iproduct clearfix">
                  <div class="product-image">
                    <a href="category-detail.php?ID=<?php echo $rs_row["ID"];?>"><img src="images/shop/<?php echo $img_row1["images"];?>" style="width=175px; height:175px;"></a>
                  </div>
                  <div class="product-desc center">
                    <div class="product-title"><h3><a href="category-detail.php?ID=<?php echo $rs_row["ID"];?>"><?php echo $rs_row["title"]; ?></a></h3></div>
                  </div>
                </div>
              </div>
            <?php } ?>


            </div>

          </div>

        </div>
      </div>
      </div>

    </div>

  </section><!-- #content end -->

<?php
 include("footer.php");
 ?>
