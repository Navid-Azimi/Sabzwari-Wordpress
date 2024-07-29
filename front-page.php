<?php get_header() ?>
<!-- start of hero -->
<?php if (have_rows('slider')) : ?>
  <section class="hero hero-slider-wrapper hero-slider-s1">
    <div class="hero-slider">
      <?php while (have_rows('slider')) : the_row(); ?>
        <div class="slide">
          <img src="<?= get_sub_field('image') ?>" alt class="slider-bg">
          <div class="container">
            <div class="row">
              <div class="col col-md-10 col-md-offset-1 slide-caption">
                <h1 class="slide-title"><?= get_sub_field('title') ?></h1>
                <h5 class="slide-subtitle"><?= get_sub_field('details') ?></h5>
                <?php $button = get_sub_field('button'); ?>
                <?php if ($button) : ?>
                  <a href="<?= esc_url($button['url']) ?>" class="theme-btn-s1" target="<?= ($button['target']) ? $button['target'] : '_self' ?>"><?= $button['title'] ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
  <!-- end of hero slider -->
<?php endif; ?>

<?php if (get_field('about_us')) : ?>

  <!-- start of about-us -->
  <section class="about-us section-padding">
    <div class="container">
      <div class="row">
        <div class="col col-md-6">
          <div class="section-title-s1">
            <span>About us</span>
            <!-- <h2>Empower Your Business with Our <span>Extensive Range</span> of Premium Products</h2> -->
            <h2><?= get_field('about_us')['slogan'] ?></h2>
          </div>
          <div class="about-details">
            <?= get_field('about_us')['details'] ?>
          </div>
        </div>
        <div class="col col-md-6 about-image-col">
          <div class="img-holder">
            <img src=" <?= get_field('about_us')['image_center'] ?>" alt class="img img-responsive">
            <img src=" <?= get_field('about_us')['image_left'] ?>" alt class="img img-responsive">
            <img src=" <?= get_field('about_us')['image_right'] ?>" alt class="img img-responsive">
          </div>
        </div>
      </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- end of about-us -->

<?php endif; ?>

<?php if (get_field('products_section')) : ?>
  <!-- start of services-section -->
  <section class="services-section section-padding">
    <div class="container">
      <div class="row section-title-s2">
        <div class="col col-lg-3">
          <h2><?= get_field('products_section')['title'] ?></h2>
        </div>
        <div class="col col-lg-7">
          <p><?= get_field('products_section')['details'] ?></p>
        </div>
      </div> <!-- end row -->
      <?php
      $products = get_field('products_section')['products'];
      if (count($products) != 0) :
      ?>
        <div class="row services-grids">
          <?php
          foreach ($products as $product) :
          ?>
            <div class="col col-lg-4 col-xs-6">
              <div class="grid">
                <div class="bg-image">
                  <img src="<?= get_the_post_thumbnail_url($product->ID) ?>" alt>
                </div>
                <!-- <span class="icon"><i class="fi flaticon-construction"></i></span> -->
                <div class="service-details">
                  <h3><a href="<?= get_post_permalink($product->ID) ?>"><?= get_the_title($product->ID) ?></a></h3>
                  <p><?= get_the_excerpt($product->ID) ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div> <!-- end container -->
  </section>
  <!-- end of services-section -->
<?php endif; ?>



<?php if (isset(get_field('counters_section')['counter']) && count(get_field('counters_section')['counter']) != 0) : ?>
  <!-- start of fun-fact -->
  <section class="fun-fact section-padding">
    <div class="container">
      <div class="row section-title-s4">
        <div class="col col-xs-12">
          <h2><?= get_field('counters_section')['title'] ?></h2>
        </div>
      </div> <!-- end section-title -->
      <div class="row start-count">
        <?php foreach (get_field('counters_section')['counter'] as $counter) : ?>
          <div class="col col-sm-4">
            <div class="grid">
              <h4><span class="counter" data-count="<?= $counter['number']  ?>">00</span><span><?= $counter['sign'] ?></span></h4>
              <h3><?= $counter['title'] ?></h3>
              <p><?= $counter['details'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- end of fun-fact -->

<?php endif; ?>

<?php if (get_field('faq')) : ?>
  <!-- start of faq-blog -->
  <section class="faq-blog section-padding">
    <div class="container">
      <div class="row">
        <div class="col col-lg-12">
          <div class="section-title-s5">
            <h2><?= get_field('faq')['title'] ?></h2>
          </div>
          <div class="panel-group faq-accordion theme-accordion" id="accordion">
            <?php
            $i = 1;
            foreach (get_field('faq')['questions'] as $faq) : ?>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i ?>" aria-expanded="true"><?= $faq['question'] ?></a>
                </div>
                <div id="collapse<?= $i ?>" class="panel-collapse collapse <?= ($i != 1) ? '' : 'in' ?>">
                  <div class="panel-body">
                    <p><?= $faq['answer'] ?></p>
                  </div>
                </div>
              </div>
            <?php
              $i++;
            endforeach; ?>
          </div>
        </div>

      </div> <!-- end row -->
    </div> <!-- end container -->
  </section>
  <!-- end of faq-blog -->
<?php endif; ?>
<?php get_footer() ?>