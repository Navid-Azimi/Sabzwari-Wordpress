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



<!-- start of latest-porjects-s3 -->
<section class="latest-porjects-s3 section-padding">
  <div class="container-fluid">
    <div class="row">
      <div class="projects-s3-grids project-s3-slider">
        <?php $loop = new WP_Query(array('post_type' => 'product', 'posts_per_page' => -1)); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="grid">
            <div class="img-holder">
              <img src="<?= the_post_thumbnail_url( ) ?>" alt>
            </div>
            <div class="details">
              <h3><a href="<?= the_permalink( ) ?>"><?= the_title() ?></a></h3>
              <p><?= the_excerpt(  ) ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div> <!-- end row -->
  </div>
</section>
<!-- end of latest-porjects-s3 -->


<?php get_footer() ?>