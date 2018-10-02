<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<?php get_the_content(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
$this_cat = get_the_category($post->ID);
?>
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col col-sm-12 col-md-8">
				<div class="content">
					<section class="post__content">
						<h1>
							<?php the_title(); ?>
						</h1>
						<div class="post__info">
							<div class="post__info-date">
								<?= get_the_date(); ?>
							</div>
							<div class="post__info-share">
								udostępnij:
								<?php
									if (have_rows('dodaj_portal_do_share-owania','option')):
									while (have_rows('dodaj_portal_do_share-owania','option')) : the_row()
								?>
										<a href="<?= get_sub_field('link','option'); ?><?= get_permalink(); ?>" target="_blank" class="<?= get_sub_field('portal','option'); ?>"></a>
								<?php
									endwhile;
									endif;
								?>
							</div>
						</div>
						<p>
							<?php the_content(); ?>
						</p>
					</section>
					<?php endwhile; ?>
					<?php endif; ?>
					<section class="associated border-top">
						<div class="row">
							<div class="col-lg-12">
								<h2>
									Podobne artykuły
								</h2>
							</div>

							<?php
								$args =  [
									'posts_per_page' => 3, 
									'order'=> 'ASC', 
									'orderby' => 'title', 
									'category_name' => $this_cat[0]->cat_name
								];
								$myposts = get_posts( $args );
								foreach ( $myposts as $post ) : setup_postdata( $post );
							?>

							<div class="col-xs-12 col-sm-4">
								<div class="post">
									<div class="article">
										<a href="#" class="article__img">
											<?= the_post_thumbnail('medium', array('class' => 'lazy')); ?>
										</a>
										<div class="article__category">
											<?php $category_detail=get_the_category($post->ID);
									foreach($category_detail as $cd) :?>
											<a href="<?= get_category_link($cd->cat_ID);?>">
												<?= $cd->cat_name; ?>
											</a>
											<?php endforeach; ?>
										</div>
									</div>
									<div class="article__content">
										<h2 class="article__header">
											<a href="#" class="article__header__link">
												<?php the_title(); ?>
											</a>
										</h2>
										<time class="article__date">
											<?= get_the_date(); ?>
										</time>
									</div>
								</div>
							</div>
							<?php
								endforeach; 
								wp_reset_postdata();
							?>
						</div>
					</section>

					<section class="prevNextArticle border-top">
						<div class="row">

							<div class="prevNext__post col-sm-6">
								<h3>Poprzedni artykuł</h3>
								<?php
								$prevpost = get_adjacent_post( false, '', true, 'category' );
								$image = get_the_post_thumbnail( $prevpost );
								$name = get_the_title( $prevpost );
								$url = get_permalink( $prevpost );
							?>
								<a href="<?= $url; ?>" title="<?= $name; ?>">
									<div class="article__img">
										<?= $image; ?>
									</div>
									<div class="article__content">
										<h2 class="article__content__header">
											<?= $name; ?>
										</h2>
									</div>
								</a>
							</div>

							<div class="prevNext__post col-sm-6">
								<h3>Następny artykuł</h3>
								<?php
								$nextpost = get_adjacent_post( false, '', false, 'category' );
								$image = get_the_post_thumbnail( $nextpost, 'thumbnail' );
								$name = get_the_title( $nextpost );
								$url = get_permalink( $nextpost );
							?>
								<a href="<?= $url; ?>" title="<?= $name; ?>">
									<div class="article__img">
										<?= $image; ?>
									</div>
									<div class="article__content">
										<h2 class="article__content__header">
											<?= $name; ?>
										</h2>
									</div>
								</a>
							</div>
						</div>
					</section>
					<section class="comments" id="comments">
						<?php comments_template() ?>

					</section>

				</div>
			</div>
			<?php get_template_part( 'view/aside', '' );?>
		</div>
	</div>
</section>
<?php get_footer();