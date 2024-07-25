<?php
//Template Name: Products Page
?>

<?php get_header(); ?>

<!-- start page-title-wrapper -->
<div class="page-title">
  <div class="container">
    <h1><?= the_title() ?></h1>
  </div>
</div>
<!-- end page-title-wrapper -->


<!-- start of latest-projects-s2 -->
<section class="latest-projects-s2 section-padding">
  <div class="container">
    <div class="row latest-projects-s2-grids">
      <div class="col col-lg-6 left-col">
        <div class="grid">
          <div class="img-holder">
            <img src="<?= get_bloginfo('template_directory'); ?>/assets/images/sabzawari/product_page/prod_bg_1.jpg" alt class="img img-responsive">
          </div>
          <div class="details">
            <h3><a href="#">Petroleum Products</a></h3>
            <!-- <p class="location"><i class="fa fa-map-marker"></i> Rotterdam, Netherlands</p> -->
          </div>
        </div>
      </div>
      <div class="col col-lg-6 right-col">
        <div class="grid">
          <div class="inner">
            <div class="img-holder">
              <img src="<?= get_bloginfo('template_directory'); ?>/assets/images/sabzawari/product_page/prod_sm_1.jpg" alt class="img img-responsive">
            </div>
            <div class="details">
              <h3><a href="#">High quality Petrol-92,93</a></h3>
              <!-- <p class="location"><i class="fa fa-map-marker"></i> Rotterdam, Netherlands</p> -->
            </div>
          </div>
        </div>
        <div class="grid">
          <div class="inner">
            <div class="img-holder">
              <img src="<?= get_bloginfo('template_directory'); ?>/assets/images/sabzawari/product_page/prod_sm_2.jpg" alt class="img img-responsive">
            </div>
            <div class="details">
              <h3><a href="#">Natural Gas</a></h3>
              <!-- <p class="location"><i class="fa fa-map-marker"></i> Rotterdam, Netherlands</p> -->
            </div>
          </div>
        </div>
        <div class="grid">
          <div class="inner">
            <div class="img-holder">
              <img src="<?= get_bloginfo('template_directory'); ?>/assets/images/sabzawari/product_page/prod_sm_3.jpg" alt class="img img-responsive">
            </div>
            <div class="details">
              <h3><a href="#">Urea Fertilizer (Grade B)</a></h3>
              <!-- <p class="location"><i class="fa fa-map-marker"></i> Rotterdam, Netherlands</p> -->
            </div>
          </div>
        </div>
        <div class="grid">
          <div class="inner">
            <div class="img-holder">
              <img src="<?= get_bloginfo('template_directory'); ?>/assets/images/sabzawari/product_page/prod_sm_4.jpg" alt class="img img-responsive">
            </div>
            <div class="details">
              <h3><a href="#">Polypropylene (D-382 & D-30)
                </a></h3>
              <!-- <p class="location"><i class="fa fa-map-marker"></i> Rotterdam, Netherlands</p> -->
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end of latest-projects-s2 -->

<?php get_footer() ?>