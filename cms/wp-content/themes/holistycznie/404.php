<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php get_template_part( 'view/slider', '' );?>

<div class="section home">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12 col-md-8">
				<div class="content">

				<h1><?php _e( 'Strona nie istnieje :(', 'twentyseventeen' ); ?></h1>

					<p><?php _e( 'Wygląda na to, że strona której szukasz nie istnieje. Skorzystaj z wyszukiwarki.', 'twentyseventeen' ); ?></p>

					<?php get_search_form(); ?>

				</div>
			</div>
		

		<?php get_template_part( 'view/aside', '' );?>

		</div>
	</div>
</div>
<?php get_footer();
