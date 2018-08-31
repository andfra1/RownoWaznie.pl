<?php
if( function_exists('acf_add_options_page') ) {

	$manage_slug = 'manage';

	acf_add_options_page(array(
		'page_title' 	=> 'Zarządzanie',
		'menu_title'	=> 'Zarządzanie',
		'menu_slug' 	=> $manage_slug
	));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Social Media',
			'menu_title'	=> 'Social Media',
			'menu_slug' 	=> $manage_slug . '-social-media',
			'parent_slug' => $manage_slug
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Dane kontaktowe firmy',
			'menu_title'	=> 'Dane kontaktowe',
			'menu_slug' 	=> $manage_slug . '-dane-kontaktowe',
			'parent_slug' => $manage_slug
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Polecają nas',
			'menu_title'	=> 'Polecają nas',
			'menu_slug' 	=> $manage_slug . '-polecaja-nas',
			'parent_slug' => $manage_slug
		));
	
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Rekomendacje',
			'menu_title'	=> 'Rekomendacje',
			'menu_slug' 	=> $manage_slug . '-rekomendacje',
			'parent_slug' => $manage_slug
		));
}
?>