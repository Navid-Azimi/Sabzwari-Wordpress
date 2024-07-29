<?php
//Template Name: About Us
?>

<?php get_header() ?>

<!-- start page-title-wrapper -->
<div class="page-title">
  <div class="container">
    <h1><?= the_title() ?></h1>
  </div>
</div>
<!-- end page-title-wrapper -->



<!-- start of overview-section -->
<section class="overview-section section-padding">
  <h2 class="hidden">Overview</h2>
  <div class="container">
    <div class="row">
      <div class="col col-lg-10 col-lg-offset-1 content">
        <p class="overview-text"><?= the_excerpt() ?></p>


      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end of overview-section -->

<?php if (have_rows('counters')) : ?>
  <!-- start of fun-fact -->
  <section class="fun-fact section-padding">
    <div class="container">
      <div class="row section-title-s4">
        <div class="col col-xs-12">
          <h2><?= the_field('title') ?></h2>
        </div>
      </div> <!-- end section-title -->

      <div class="row start-count">
        <?php while(have_rows('counters')): the_row(); ?>
        <div class="col col-sm-4">
          <div class="grid">
            <h4><span class="counter" data-count="<?= get_sub_field('number')  ?>">00</span><span><?= get_sub_field('sign') ?></span></h4>
            <h3><?= get_sub_field('title') ?></h3>
            <p><?= get_sub_field('details') ?></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- end of fun-fact -->

<?php endif; ?>

<?php get_footer() ?>