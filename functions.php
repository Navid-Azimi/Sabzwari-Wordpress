<?php
function Cyborg_theme_style()
{

  wp_enqueue_style('font_awesome_min_css', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

  wp_enqueue_style('flaticon_css', get_template_directory_uri() . '/assets/css/flaticon.css');

  wp_enqueue_style('bootstrap_min_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

  wp_enqueue_style('animate_css', get_template_directory_uri() . '/assets/css/animate.css');

  wp_enqueue_style('owl_carousel_css', get_template_directory_uri() . '/assets/css/owl.carousel.css');

  wp_enqueue_style('owl_theme_css', get_template_directory_uri() . '/assets/css/owl.theme.css');

  wp_enqueue_style('slick_css', get_template_directory_uri() . '/assets/css/slick.css');

  wp_enqueue_style('slick_theme_css', get_template_directory_uri() . '/assets/css/slick-theme.css');

  wp_enqueue_style('owl_transitions_css', get_template_directory_uri() . '/assets/css/owl.transitions.css');

  wp_enqueue_style('jquery_fancybox_css', get_template_directory_uri() . '/assets/css/jquery.fancybox.css');

  wp_enqueue_style('bootstrap_select_min_css', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css');

  wp_enqueue_style('magnific_popup_css', get_template_directory_uri() . '/assets/css/magnific-popup.css');

  wp_enqueue_style('style_css', get_template_directory_uri() . '/assets/css/style.css');
  
}

add_action('wp_enqueue_scripts', 'Cyborg_theme_style');

function Cyborg_theme_js()
{

  wp_enqueue_script('jquery_min_js', get_template_directory_uri() . '/assets/js/jquery.min.js', 1, 1, 1);

  wp_enqueue_script('bootstrap_min_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 1, 1, 1);

  wp_enqueue_script('jquery_plugin_collection_js', get_template_directory_uri() . '/assets/js/jquery-plugin-collection.js', 1, 1, 1);

  wp_enqueue_script('portfolio_js', get_template_directory_uri() . '/assets/js/portfolio.js', 1, 1, 1);

  wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/script.js', 1, 1, 1);
}

add_action('wp_enqueue_scripts', 'Cyborg_theme_js');


function register_theme_menus()
{
  register_nav_menus(
    array(
      'primary-menu'      => __('Primary Menu'),
      'footer-menu-right' => __('Footer Menu Right'),
      'footer-menu-left'  => __('Footer Menu Left')
    )
  );
}
add_action('init', 'register_theme_menus');


function Cyborg_customize_register($wp_customize)
{
  // Add setting for logo image
  $wp_customize->add_setting('custom_logo_image', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
    'transport'         => 'refresh',
  ));

  // Add control for logo image
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_logo_image', array(
    'label'       => __('Upload Logo', 'Cyborg'),
    'section'     => 'title_tagline',
    'settings'    => 'custom_logo_image',
  )));

  // Add section for social media URLs
  $wp_customize->add_section('social_media_section', array(
    'title'       => __('Social Media', 'Cyborg'),
    'priority'    => 30,
    'description' => 'Add your social media URLs here.',
  ));

  // Add settings and controls for each social media URL
  $social_medias = array('telegram', 'facebook', 'whatsapp', 'instagram');

  foreach ($social_medias as $social_media) {
    $wp_customize->add_setting($social_media . '_url', array(
      'default'           => '',
      'sanitize_callback' => 'esc_url_raw',
      'transport'         => 'refresh',
    ));

    $wp_customize->add_control($social_media . '_url', array(
      'label'    => __(ucfirst($social_media) . ' URL', 'Cyborg'),
      'section'  => 'social_media_section',
      'settings' => $social_media . '_url',
      'type'     => 'url',
    ));
  }
  // Add setting for website description
  $wp_customize->add_setting('website_description', array(
    'default'           => '',
    'sanitize_callback' => 'wp_kses_post',
    'transport'         => 'refresh',
  ));

  // Add control for website description
  $wp_customize->add_control('website_description', array(
    'label'    => __('Website Description', 'Cyborg'),
    'section'  => 'title_tagline',
    'settings' => 'website_description',
    'type'     => 'textarea',
  ));
}
add_action('customize_register', 'Cyborg_customize_register');


function Cyborg_register_product()
{

  /**
   * Post Type: Products.
   */

  $labels = [
    "name" => esc_html__("Products", "custom-post-type-ui"),
    "singular_name" => esc_html__("Product", "custom-post-type-ui"),
    "name_admin_bar" => esc_html__("Product", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("Products", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => ["slug" => "product", "with_front" => true],
    "query_var" => true,
    "menu_icon" => "dashicons-products",
    "supports" => ["title", "editor", "thumbnail", "excerpt"],
    "show_in_graphql" => false,
  ];

  register_post_type("product", $args);
}

add_action('init', 'Cyborg_register_product');


add_theme_support('post-thumbnails');

add_theme_support( 'excerpt'  );

add_post_type_support( 'page', 'excerpt' );