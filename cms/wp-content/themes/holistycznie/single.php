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

<?php
$post = [
    'title' => 'Nagłówek',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, placeat laboriosam nostrum quo est quas temporibus eos repellat aspernatur iure numquam, nulla facilis natus impedit rem atque enim? A, odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto non, fuga assumenda ducimus mollitia omnis, eum officiis sint beatae vel deleniti dolore neque dolorum. Adipisci in temporibus nulla sit quibusdam!'
];
?>

<section class="section slider">
	<div class="container">
		<div class="row">
			<div class="slider-articles owl-carousel" id="slider-articles">
				<?php for($i=0; $i<5; $i++) : ?>

				<div class="post">
					<div class="article">
						<a href="#" class="article__img">
							<img src="https://picsum.photos/400/30<?= $i; ?>" alt="x">
						</a>
						<div class="article__content">
							<h2 class="article__content-header">
								<a href="#" class="article__content-header__link">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
								</a>
							</h2>
							<time class="article__content-date">
								28 czerwca 2018
							</time>
						</div>
					</div>

				</div>
				<div class="post">

					<div class="article">
						<a href="#" class="article__img">
							<img src="https://picsum.photos/400/40<?= $i; ?>" alt="x">
						</a>
						<div class="article__content">
							<h2 class="article__content-header">
								<a href="#" class="article__content-header__link">
									Lorem ipsum dolor sit
								</a>
							</h2>
							<time class="article__content-date">
								28 czerwca 2018
							</time>
						</div>
					</div>
				</div>

				<?php endfor; ?>
			</div>
		</div>
	</div>
</section>

<?php get_the_content(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<section class="post">
					<h1>
						<?php the_title(); ?>
					</h1>
					<div class="post__info">
						<div class="post__info-date">
							<?php echo get_the_date(); ?>
						</div>
						<div class="post__info-share">
							Podziel się:
							<span class="icon-facebook2"></span>
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

						<?php for($i=0; $i<3; $i++) : ?>

						<div class="post col-xs-12 col-sm-4">
							<div class="article">
								<a href="#" class="article__img">
									<img src="https://picsum.photos/400/30<?= $i; ?>" alt="x">
								</a>
								<div class="article__category">
									<span>psyche</span>
									<span>ciało</span>
								</div>
								<div class="article__content">
									<h2 class="article__content-header">
										<a href="#" class="article__content-header__link">
											Lorem ipsum dolor sit amet consectetur adipisicing elit.
										</a>
									</h2>
									<time class="article__content-date">
										28 czerwca 2018
									</time>
								</div>
							</div>
						</div>

						<?php endfor; ?>

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
							<h2 class="article__content"><h2 class="article__content-header">%title</h2></div>', '','');
							?>
						

						<div class="post col-xs-6">
							<h3>Następny artykuł</h3>

							<?php
							$nextPost = get_next_post();
							$nextthumbnail = get_the_post_thumbnail($nextPost->ID);
							next_post_link( '%link', '<div class="article__img">'.$nextthumbnail.'</div>
							<h2 class="article__content"><h2 class="article__content-header">%title</h2></div>', '','');
								?>
							<!-- <a href="#" class="article">
								<div class="article__img">
									<img src="https://picsum.photos/400/30<?= $i; ?>" alt="x">
								</div>
								<div class="article__content">
									<h2 class="article__content-header">
										Lorem ipsum dolor sit amet consectetur adipisicing elit.
									</h2>
								</div>
							</a> -->
						</div>

					</div>
				</section>

			</div>

			<?php include_once('aside.php')?>

		</div>

	</div>
</section>
<?php get_footer();