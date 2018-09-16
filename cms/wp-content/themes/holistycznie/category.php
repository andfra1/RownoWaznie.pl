<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<section class="section home">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12 col-md-8">
			<div class="content">
		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<div class="post col-lg-12">
			<div class="article">
				<div class="article__category">
					<?php $category_detail=get_the_category($post->ID);
							foreach($category_detail as $cd) :?>
					<span>
						<?= $cd->cat_name; ?>
					</span>
					<?php endforeach; ?>
				</div>
				<h2 class="article__header">
					<a href="<?= get_permalink(); ?>" class="article__header__link" title="<?php the_title();?>">
						<?php the_title();?>
					</a>
				</h2>
				<div class="article__box">
					<author class="article__author">
						<?= get_author_name(); ?>
					</author>
					<time datetime="<?= get_the_date(); ?>" class="article__date">
						<?= get_the_date(); ?>
					</time>
					<div class="article__comments">
						<?= get_comments_number($post->ID); ?>
					</div>
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
		endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>
		</div>
		</div>
		<?php get_template_part( 'view/aside', '' );?>
	</div>
</div>
</section>

<?php get_footer();
