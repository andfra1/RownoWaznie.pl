<?php
include_once('html_head.php');
?>
<div class="offCanvas" id="offCanvas"></div>

<header class="header" id="header">
  <div class="container border-bottom">
    <div class="row">
      <div class="col-lg-12">

        <div class="header__top">
          <?php get_top_menu( $topmenu ); ?>
          <?php get_search_form(); ?>
            <?php
              if (have_rows('dodaj_portal_spolecznosciowy','option')):
            ?>
              <div class="header__top_social">
								<?php while (have_rows('dodaj_portal_spolecznosciowy','option')) : the_row()?>
                  <a href="<?= get_sub_field('wklej_link','option'); ?>" target="_blank" class="<?= get_sub_field('portal_spolecznosciowy','option'); ?>"></a>
								<?php
                  endwhile;
                ?>
              </div>
            <?php
              endif;
            ?>
        </div>

        <div class="header__logo">
          <a class="header__logo-link" href="<?= get_home_url(); ?>">
            <?php bloginfo( 'name' ); ?>
          </a>
        </div>

        <button class="burger" id="burger" value="off">
          <span class="burger__stripe"></span>
        </button>

          <?php get_main_menu( $mainmenu ); ?>
          
      </div>
    </div>
  </div>
</header>
<div class="underHeader" id="underHeader"></div>
<div class="canvas" id="canvas">