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