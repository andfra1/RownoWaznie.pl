<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<section class="section">
	<div class="container">
		<div class="row">
		<div class="col col-sm-12 col-md-8">
			<div class="content">
				<h1><?php _e( 'Nie znaleziono treści :(', 'twentyseventeen' ); ?></h1>
			
				<?php
				if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyseventeen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

				<?php else : ?>

					<p><?php _e( 'Strona, której szukasz niestety jest pusta. Skorzystaj z wyszukiwarki, aby odnaleźć interesujący Cię post.', 'twentyseventeen' ); ?></p>
				<?php
					get_search_form();
					endif;
				?>
				</div>
			</div>
		</div>
	</div>
</section>