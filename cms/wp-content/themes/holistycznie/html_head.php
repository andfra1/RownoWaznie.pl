<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<base href="./">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<script type="text/javascript" src="js/html5.js"></script>
		<![endif]-->

	<?php
	$pageBasicColor = '#fff';
	?>

	<meta name="msapplication-TileColor" content="<?= $pageBasicColor; ?>">
	<meta name="theme-color" content="<?= $pageBasicColor; ?>">
	<meta name="apple-mobile-web-app-title" content="<?php wp_title(); ?>">
	<meta name="application-name" content="<?php wp_title() ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">

	<link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri() ?>img/fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>img/fav/favicon-16x16.png">
	<link rel="manifest" href="<?= get_template_directory_uri() ?>img/fav/site.webmanifest">
	<link rel="mask-icon" href="<?= get_template_directory_uri() ?>img/fav/safari-pinned-tab.svg" color="<?= $pageBasicColor; ?>">

<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/main.min.css">

<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->

<!-- Globalny tag witryny (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?//= get_field('ga_code', 'option')?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?//= get_field('ga_code', 'option')?>');
</script> -->

<?php wp_head(); ?>
</head>

<body>