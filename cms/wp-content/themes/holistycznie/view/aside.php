  <aside class="aside">
    <?php if(!empty(get_field('omnie-tresc', 'option'))):?>
      <div class="bio">
        <div class="bio__avatar">
          <img src="<?= get_field('omnie-zdjecie', 'option')['url']; ?>" alt="<?= get_field('omnie-zdjecie', 'option')['alt']; ?>">
        </div>
        <div class="bio__info">
        <h3>
          <?= get_field('omnie-naglowek', 'option'); ?>
        </h3>
          <?= get_field('omnie-tresc', 'option'); ?>
        </div>
      </div>
    <?php endif;?>

    <?php
      if (have_rows('dodaj_portal_spolecznosciowy','option')):
    ?>
      <div class="social">
        <?php while (have_rows('dodaj_portal_spolecznosciowy','option')) : the_row()?>
          <a href="<?= get_sub_field('wklej_link','option'); ?>" target="_blank" class="<?= get_sub_field('portal_spolecznosciowy','option'); ?>"></a>
        <?php
          endwhile;
        ?>
      </div>
    <?php
      endif;
    ?>
    
    <?php if (get_field ('panel_boczny-archiwum', 'option') ) :?>
      <div class="archives">
        <h3>Archiwum</h3>
        <div class="custom-select" style="width:200px;">
          <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
          <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
          <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
          </select>
        </div>
      </div>
    <?php endif; ?>

<?php 
  if(have_rows('panel_boczny', 'options')) : ?>
  <div class="selected_posts">
  <?php
    while ( have_rows('panel_boczny', 'options') ) :
    the_row(); ?>

    <h2><?= get_sub_field('naglowek'); ?></h2>

    <?php while(have_rows('rodzaj_tresci')) :
        the_row();
        $posts = get_sub_field('wybrane_posty');
        foreach( $posts as $post) : // variable must be called $post (IMPORTANT)
          setup_postdata($post); ?>

          <a href="<?= get_permalink(); ?>" title="<?php the_title(); ?>">
        <div class="selected_posts_img">
          <?= get_the_post_thumbnail($post_id, 'thumbnail'); ?>
        </div>
        <div class="selected_posts_title">
          <h2><?php the_title(); ?></h2>
        </div>
        </a>

          <?php
        endforeach;  
          wp_reset_postdata();
        
      endwhile;
        endwhile;
        ?>
        </div>
        <?php
  endif;
  ?>
  <div>
    <?php st_tag_cloud(); ?>
  </div>

</aside>