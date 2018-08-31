<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
	<header class="page-header">
		<h1 class="page-title">
			<?php single_post_title(); ?>
		</h1>
	</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title">
			<?php _e( 'Posts', 'twentyseventeen' ); ?>
		</h2>
	</header>
	<?php endif; ?>

	<section class="section home">
		<div class="container">
			<div class="col col-sm-12 col-md-8">
				<div class="row">

					<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
					?>

					<div class="post col-sm-12">
						<div class="article">
							<a href="<?= get_permalink(); ?>" class="article__img">
								<?= the_post_thumbnail('thumbnail', array('class' => 'lazy')); ?>
								<span class="lazy__placeholder"></span>
							</a>
							<div class="article__category">

								<?php $category_detail=get_the_category($post->ID);
									foreach($category_detail as $cd) :?>
								<span>
									<?= $cd->cat_name; ?>
								</span>
								<?php endforeach; ?>
							</div>
							<div class="article__content">
								<h2 class="article__content-header">
									<a href="<?= get_permalink(); ?>" class="article__content-header__link">
										<?php the_title();?>
									</a>
								</h2>
								<author>
									<?= get_author_name(); ?>
								</author>
								<time datetime="2018-06-28 20:00" class="article__content-date">
									<?= get_the_date(); ?>
								</time>
								<div class="article__content-intro">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam alias expedita saepe nobis consequatur fugit
									est repellat
									corporis dolorum aliquid, magnam earum cupiditate dolor, quibusdam ut voluptas nulla. Quam, necessitatibus!
								</div>
							</div>
						</div>
					</div>



					<?php
				endwhile;

				the_posts_pagination( array(
					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>

				</div>
			</div>
		</div>
	</section>


	<?php get_footer();