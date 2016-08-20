<?php

function htanglican_setup() {
  $defaults = array(
      'default-image'          => '',
      'random-default'         => false,
      'width'                  => 1920,
      'height'                 => 626,
      'flex-height'            => true,
      'flex-width'             => true,
      'default-text-color'     => '',
      'header-text'            => true,
      'uploads'                => true,
      'wp-head-callback'       => '',
      'admin-head-callback'    => ''
  );
  add_theme_support( 'custom-header', $defaults);

  register_nav_menu( 'primary', __( 'Primary navigation', 'htanglican' ) );
}


add_action( 'after_setup_theme', 'htanglican_setup' );


require_once('wp_bootstrap_navwalker.php');
?>
