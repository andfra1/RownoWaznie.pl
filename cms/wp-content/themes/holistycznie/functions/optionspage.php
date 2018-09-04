<?php
if( function_exists('acf_add_options_page') ) {

	$manage_slug = 'manage';

	acf_add_options_page(array(
		'page_title' 	=> 'Zarządzanie',
		'menu_title'	=> 'Zarządzanie',
		'menu_slug' 	=> $manage_slug
	));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'O mnie',
			'menu_title'	=> 'O mnie',
			'menu_slug' 	=> $manage_slug . '-omnie',
			'parent_slug' => $manage_slug
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Google Analitycs',
			'menu_title'	=> 'Google Analitycs',
			'menu_slug' 	=> $manage_slug . '-ga',
			'parent_slug' => $manage_slug
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Share',
			'menu_title'	=> 'Share',
			'menu_slug' 	=> $manage_slug . '-share',
			'parent_slug' => $manage_slug
		));
}
?>