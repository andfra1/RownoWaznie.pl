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

<section class="section slider">
	<div class="container">
		<div class="row">
			<div class="slider-articles owl-carousel" id="slider-articles">
				<?php
					$popular = new WP_Query( array( 'posts_per_page' => 4, 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
					if ( $popular->have_posts() ) :
					while ( $popular->have_posts() ) : $popular->the_post();
					?>
				<div class="post">
					<div class="article">
						<a href="<?= get_permalink(); ?>" class="article__img" title="<?php the_title(); ?>">
							<?= get_the_post_thumbnail();?>
						</a>
						<div class="article__content">
							<h2 class="article__content-header">
								<a href="<?= get_permalink(); ?>" title="<?php the_title(); ?>" class="article__content-header__link">
									<?php the_title(); ?>
								</a>
							</h2>
							<time class="article__content-date">
								<?= get_the_date(); ?>
							</time>
						</div>
					</div>
				</div>
				<?php endwhile;
					wp_reset_postdata();
					else :
				?>
				<p>
					<?php esc_html_e( 'Brak postów do wyświetlenia.' ); ?>
				</p>
				<?php endif; ?>


			</div>
		</div>
	</div>
</section>

<div class="section home">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12 col-md-8">
				<div class="content">

				<h1><?php _e( 'Nie znaleziono strony :(', 'twentyseventeen' ); ?></h1>

					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>

					<?php get_search_form(); ?>

				</div>
			</div>
		

		<?php get_template_part( 'view/aside', '' );?>

		</div>
	</div>
</div>
<?php get_footer();
