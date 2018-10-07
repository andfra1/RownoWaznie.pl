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
			'page_title' 	=> 'Panel boczny',
			'menu_title'	=> 'Panel boczny',
			'menu_slug' 	=> $manage_slug . '-panel',
			'parent_slug' => $manage_slug
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Google Analitycs',
			'menu_title'	=> 'Google Analitycs',
			'menu_slug' 	=> $manage_slug . '-ga',
			'parent_slug' => $manage_slug
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Social Media',
			'menu_title'	=> 'Social Media',
			'menu_slug' 	=> $manage_slug . '-socialmedia',
			'parent_slug' => $manage_slug
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Polityka prywatności',
			'menu_title'	=> 'Polityka prywatności',
			'menu_slug' 	=> $manage_slug . '-polityka',
			'parent_slug' => $manage_slug
		));
}
?>