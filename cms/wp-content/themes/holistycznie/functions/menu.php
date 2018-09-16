<?php
add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args ) {
  if ( 'menu-item' === $item->classes[1] ) {
      $atts['data-text'] = $item->title;
      $atts['title'] = $item->title;
      $atts['class'] = 'item__link';
  }

  return $atts;
}, 10, 3 );

	register_nav_menus( array(
    'main'    => __( 'main' ),
    'top'    => __( 'top' )
  ) );
  function get_main_menu($menu) {
    $mainmenu = array(
      'theme_location'  => 'main',
      'menu'            => '',
      'container'       => 'ul',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'header__menu',
      'menu_id'         => 'header__menu',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => ''
    );
    //return wp_nav_menu( array('theme_location' => 'main' ) );
    return wp_nav_menu( $mainmenu );
  }

  function get_top_menu($menu) {
    $topmenu = array(
      'theme_location'  => 'top',
      'menu'            => '',
      'container'       => 'ul',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'header__menuOnTop',
      'menu_id'         => 'menuOnTop',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => ''
    );
    return wp_nav_menu( $topmenu );
  }