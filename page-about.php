<?php
//Template Name: About Us
?>

<?php get_header() ?>

<!-- start page-title-wrapper -->
<div class="page-title">
  <div class="container">
    <h1>About Us</h1>
  </div>
</div>
<!-- end page-title-wrapper -->


<!-- start page title bottom menu -->
<div class="pg-title-btm-menu">
  <div class="container">
    <div class="row">
      <div class="col col-xs-12">
        <ul>
          <li class="current"><a href="about.html">Company Overview</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- start page title bottom menu -->


<!-- start of overview-section -->
<section class="overview-section section-padding">
  <h2 class="hidden">Overview</h2>
  <div class="container">
    <div class="row">
      <div class="col col-lg-10 col-lg-offset-1 content">
        <p class="overview-text"><span>Mega Industry,</span> headquartered in <span>Upper Richmond Rd, London,</span> is a leading international supplier of equipment and services to the international makets.</p>

        <div class="overview-pic-video">
          <div class="img-holder">
            <a href="#"><img src="<?= get_bloginfo('template_directory'); ?>/assets/images/about-us/sw.png" alt></a>
            <img src="<?= get_bloginfo('template_directory'); ?>/assets/images/overview/img-1.jpg" alt class="img img-responsive">
          </div>
          <div class="video-holder">
            <img src="<?= get_bloginfo('template_directory'); ?>/assets/images/overview/img-2.jpg" alt class="img img-responsive">
            <a href="https://www.youtube.com/embed/opj24KnzrWo?autoplay=1" class="video-play" data-type="iframe"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="chart-area raised-chart">
          <canvas id="chart"></canvas>
        </div>

        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end of overview-section -->


<!-- start of fun-fact -->
<section class="fun-fact section-padding">
  <div class="container">
    <div class="row section-title-s4">
      <div class="col col-xs-12">
        <h2>Some facts in <span>Numbers</span></h2>
      </div>
    </div> <!-- end section-title -->

    <div class="row start-count">
      <div class="col col-sm-4">
        <div class="grid">
          <h4><span class="counter" data-count="1200">00</span><span>+</span></h4>
          <h3>Projects</h3>
          <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
        </div>
      </div>
      <div class="col col-sm-4">
        <div class="grid">
          <h4><span class="counter" data-count="800">00</span><span>+</span></h4>
          <h3>Clients</h3>
          <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
        </div>
      </div>
      <div class="col col-sm-4">
        <div class="grid">
          <h4><span class="counter" data-count="99">00</span><span>%</span></h4>
          <h3>Satisfaction</h3>
          <p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
        </div>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end of fun-fact -->

<?php get_footer() ?>