<?php
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'glowne' ),
  ) );
  
  function get_nav_menu($menu) {
    $navMenuDefaults = array(
      'theme_location'  => $menu,
      'menu'            => '',
      'container'       => 'ul',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'header__menu',
      'menu_id'         => 'menu',
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
    return wp_nav_menu($navMenuDefaults);
  }

  ?>