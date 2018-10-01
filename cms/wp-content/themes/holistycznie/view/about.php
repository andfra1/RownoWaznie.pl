<?php
/*
Template name: o mnie
*/

get_header(); ?>

<section class="section">
	<div class="container">
		<div class="row">
      <div class="col col-sm-12 col-md-8">
        <div class="content">
        <?php the_content(); ?>
        </div>
      </div>

      <?php get_template_part( 'view/aside', '' );?>

    </div>
  </div>
</section>

<?php get_footer();