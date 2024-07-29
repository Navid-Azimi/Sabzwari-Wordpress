<?php get_header(); ?>

<?php 
while(have_posts(  )) : the_post(  );
?>

<!-- start blog-single-main-content -->
<section class="blog-single-main-content section-padding">
  <div class="container">
    <div class="row">
      <div class="col col-md-12 col-sm-12 blog-single-content">
        <div class="post">
          <div class="media">
            <img src="<?= the_post_thumbnail_url(  ) ?>" alt class="img img-responsive">
          </div>
          <div class="post-title-meta">
            <h2><?= the_title() ?></h2>
            <ul>
              <li><a href="javascript:void(0)"><?= the_author( ) ?></a></li>
              <li><a href="javascript:void(0)"><?= the_date(  ) ?></a></li>
            </ul>
          </div>
          <div class="post-body">
            <p><?= the_excerpt(  ) ?></p>
          </div>
        <?php the_content( ) ?>
        </div> <!-- end post -->
      </div> <!-- end blog-single-content -->
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end blog-single-main-content -->

<?php endwhile; ?>
<?php get_footer(); ?>