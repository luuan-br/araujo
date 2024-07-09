<?php

if( !class_exists('Theme') ) :

class Theme {
  public function __construct()
  {
    add_action('after_setup_theme', array($this, 'theme_support'));
  }

  function theme_support()
  {
    add_theme_support('post-thumbnails', array('post', 'page'));

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // logo personalizado
    add_theme_support( 'custom-logo', array(
      'height'      => 30,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );

    // registrando menu
    register_nav_menus( array(
      'menu-header'   => 'Main menu',
      'menu-footer-1' => 'Footer 1',
      'menu-footer-2' => 'Footer 2'
    ) );
  }
}

$Theme = new Theme();

endif;