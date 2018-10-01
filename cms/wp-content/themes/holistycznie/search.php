<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

<section class="section home">
	<div class="container">
		<div class="row">
		<div class="col col-sm-12 col-md-8">
			<div class="content">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<div class="post post__main col-lg-12">
			<div class="article">
				<div class="article__category">
					<?php $category_detail=get_the_category($post->ID);
							foreach($category_detail as $cd) :?>
					<a href="<?= get_category_link($cd->cat_ID);?>">
						<?= $cd->cat_name; ?>
					</a>
					<?php endforeach; ?>
				</div>
				<h2 class="article__header">
					<a href="<?= get_permalink(); ?>" class="article__header__link" title="<?php the_title();?>">
						<?php the_title();?>
					</a>
				</h2>
				<div class="article__box">
					<span class="article__author">
						<?= get_author_name(); ?>
					</span>
					<time datetime="<?= get_the_date('Y-m-d'); ?>" class="article__date">
						<?= get_the_date(); ?>
					</time>
					<a href="<?= get_permalink(); ?>#comments" class="article__comments">
						<?= get_comments_number($post->ID); ?>
					</a>
				</div>
				<a href="<?= get_permalink(); ?>" class="article__img" title="<?php the_title();?>">
					<?= the_post_thumbnail('full', array('class' => 'lazy')); ?>
					<span class="lazy__placeholder"></span>
				</a>
				<div class="article__intro">
					<?php the_excerpt(); ?>
				</div>
				<div class="article__readmore">
					<a href="<?= get_permalink(); ?>" title="<?php the_title();?>" class="article__header__link">
						<span>Czytaj więcej...</span>
						<span>Czytaj więcej...</span>
					</a>
				</div>
			</div>
		</div>

		<?php
			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
			<?php 
				get_search_form();
				endif;
			?>
			</div>
			</div>

			<?php get_template_part( 'view/aside', '' );?>
		
		</div>
	</div>
</section>

<?php get_footer();
