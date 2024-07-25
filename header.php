<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="themexriver">

  <!-- Page Title -->
  <title><?php if (is_front_page() || is_home()) {
            echo get_bloginfo('name');
          } else {
            echo wp_title('') . ' | ' . get_bloginfo('name');
          } ?></title>
  <!-- Icon fonts -->
  <?php wp_head(); ?>
</head>

<body>

  <!-- start page-wrapper -->
  <div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
      <div class="preloader-inner">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header class="site-header header-style-1">
      <nav class="navigation navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="open-btn">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php
            $custom_logo_image = get_theme_mod('custom_logo_image');
            if ($custom_logo_image) :
            ?>
              <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                <img src="<?= esc_url($custom_logo_image); ?>" alt="<?php bloginfo('name'); ?>">
              </a>
            <?php endif; ?>
          </div>

          <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
            <button class="close-navbar"><i class="fa fa-close"></i></button>
            <!-- <ul class="nav navbar-nav"> -->
            <?php
            $defaults = array(
              'container' => 'ul',
              'menu_class' => "nav navbar-nav",
              'theme_location' => "primary-menu"
            );
            wp_nav_menu($defaults);
            ?>
            <!-- </ul> -->
          </div><!-- end of nav-collapse -->


          <?php $social_medias = array('telegram', 'facebook', 'whatsapp', 'instagram'); ?>

          <div class="social-links-holder">
            <ul class="social-links">
              <?php foreach ($social_medias as $social_media) :
                $url = get_theme_mod($social_media . '_url');
                if ($url) :
                  $icon = '';
                  if($social_media == 'telegram'){
                    $icon = 'paper-plane';
                  }elseif ($social_media == 'facebook'){
                    $icon = 'facebook';
                  }elseif ($social_media == 'whatsapp'){
                    $icon = 'whatsapp';
                  }elseif ($social_media == 'instagram'){
                    $icon = 'instagram';
                  }
              ?>
                  <li><a href="<?= esc_url($url) ?>" target="_blank"><i class="fa fa-<?= $icon ?>"></i></a></li>
              <?php endif;
              endforeach; ?>
            </ul>
          </div>


        </div><!-- end of container -->
      </nav>
    </header>
    <!-- end of header -->