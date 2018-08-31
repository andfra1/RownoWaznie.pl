<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<base href="./">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<script type="text/javascript" src="js/html5.js"></script>
		<![endif]-->

	<meta name="msapplication-TileColor" content="<?= $pageBasicColor; ?>">
	<meta name="theme-color" content="<?= $pageBasicColor; ?>">
	<meta name="apple-mobile-web-app-title" content="<?php wp_title(); ?>">
	<meta name="application-name" content="<?php wp_title() ?>">
	<meta name="description" content="<?= $pageDescription; ?>" />

	<meta property="og:title" content="<?= $pageTitle_fb; ?>">
	<meta property="og:description" content="<?= $pageDescription_fb; ?>">

	<link rel="apple-touch-icon" sizes="60x60" href="<?= HTTP ?>img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= HTTP ?>img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= HTTP ?>img/fav/favicon-16x16.png">
	<link rel="manifest" href="<?= HTTP ?>img/fav/site.webmanifest">
	<link rel="mask-icon" href="<?= HTTP ?>img/fav/safari-pinned-tab.svg" color="<?= $pageBasicColor; ?>">

<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/main.min.css">

<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="offCanvas" id="offCanvas"></div>

<?php
$header = [
  'logo' => 'Holistycznie.pl',
  'menu' => [
    'ciało' => './post.php',
    'dusza' => './post.php',
    'umysł' => './post.php',
    'psyche' => './post.php'
  ],
  'menuOnTop' => [
    'o mnie' => '#',
    'kontakt' => '#'
  ],
];
?>

<header class="header" id="header">
  <div class="container border-bottom">
    <div class="row">
      <div class="col-lg-12">

        <ul class="header__menuOnTop" id="menuOnTop">
          <?php foreach ( $header['menuOnTop'] as $key => $val) : ?>
          <li class="header__menuOnTop-item">
            <a href="<?= $val; ?>" class="header__menuOnTop-item-link">
              <?= $key; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>

        <div class="header__logo">
          <a class="header__logo-link" href="<?= get_home_url(); ?>">
            Holistycznie.pl
          </a>
        </div>

        <button class="burger" id="burger" value="off">
          <div class="burger__stripe"></div>
        </button>

        <ul class="header__menu" id="menu">
          <?php foreach ( $header['menu'] as $key => $val) : ?>
          <li class="header__menu-item">
            <a href="<?= $val; ?>" class="header__menu-item-link">
              <?= $key; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>
  </div>
</header>
<div class="underHeader" id="underHeader"></div>
<div class="canvas" id="canvas">

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	*/
	?>