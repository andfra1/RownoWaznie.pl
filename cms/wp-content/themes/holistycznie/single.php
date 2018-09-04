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
	else : ?>
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
		<div class="col col-sm-12 col-md-6 col-md-offset-1">
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
							<a href="<?= get_field('fb_share','option'); ?>" class="icon-facebook2"></a>
							<a href="<?= get_field('gp_share','option'); ?>" class="icon-google-plus2"></a>
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
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

						<div class="post col-xs-12 col-sm-4">
							<div class="article">
								<a href="#" class="article__img">
								<?= the_post_thumbnail('thumbnail', array('class' => 'lazy')); ?>
								</a>
								<div class="article__category">
								<?php $category_detail=get_the_category($post->ID);
									foreach($category_detail as $cd) :?>
							<span>
								<?= $cd->cat_name; ?>
							</span>
							<?php endforeach; ?>
						</div>
								</div>
								<div class="article__content">
									<h2 class="article__content-header">
										<a href="#" class="article__content-header__link">
											<?php the_title(); ?>
										</a>
									</h2>
									<time class="article__content-date">
									<?= get_the_date(); ?>
									</time>
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

						<div class="post col-xs-6">
							<h3>Poprzedni artykuł</h3>
							<?php
							$prevPost = get_previous_post();
							$prevthumbnail = get_the_post_thumbnail($prevPost->ID);
							previous_post_link( '%link', '<div class="article__img">'.$prevthumbnail.'</div>
							<div class="article__content"><h2 class="article__content-header">%title</h2></div>', '','');
							?>
						</div>

						<div class="post col-xs-6">
							<h3>Następny artykuł</h3>
							<?php
							$nextPost = get_next_post();
							$nextthumbnail = get_the_post_thumbnail($nextPost->ID);
							next_post_link( '%link', '<div class="article__img">'.$nextthumbnail.'</div>
							<div class="article__content"><h2 class="article__content-header">%title</h2></div>', '','');
								?>
						</div>
					</div>
				</section>
				<section class="comments">

					<?php comment_form(); ?>

					<?php
//Get only the approved comments 
$args = array(
	'status' => 'approve',
	'order' => 'ASC'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
// Comment Loop
if ( $comments ) :
		foreach ( $comments as $comment ) :?>
					<div class="comment" data-id="<?= $comment_parent; ?>">
						<div class="comment__avatar">
							<img src="" alt="">
						</div>
						<div class="comment__data">
							<div class="comment__dataTop">
								<author class="comment__data__author">
									<?= $comment->comment_author; ?>
								</author>
								<time class="comment__data__time">
									<?= $comment->comment_date_gmt; ?>
								</time>
							</div>
						</div>
						<div class="comment__dataContent">
							<?= $comment->comment_content; ?>
						</div>
					</div>
					<?php
		endforeach;
else :
		echo 'Nikt jeszcze nie skomentował tego postu. Bądź pierwszy!';
endif;
?>
				</section>

			</div>
			<?php get_template_part( 'view/aside', '' );?>
		</div>
	</div>
</section>
<?php get_footer();