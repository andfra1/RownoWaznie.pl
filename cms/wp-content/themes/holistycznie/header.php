<?php
include_once('html_head.php');
?>
<div class="offCanvas" id="offCanvas"></div>

<?php
$header = [
  'logo' => 'Holistycznie.pl',
  'menu' => [
    'ciało' => './post/category/cialo',
    'dusza' => './?show=dusza',
    'umysł' => './?show=umysl',
    'psyche' => './?show=psyche'
  ],
  'menuOnTop' => [
    'o mnie' => '#',
    'kontakt' => '#'
  ],
];
?>

<header class="header" id="header">
  <div class="container border-bottom">
    <div class="row">
      <div class="col-lg-12">

        <?php get_top_menu( $topmenu ); ?>

        <div class="header__logo">
          <a class="header__logo-link" href="<?= get_home_url(); ?>">
            <?php bloginfo( 'name' ); ?>
          </a>
        </div>

        <button class="burger" id="burger" value="off">
          <div class="burger__stripe"></div>
        </button>

          <?php get_main_menu( $mainmenu ); ?>
          
      </div>
    </div>
  </div>
</header>
<div class="underHeader" id="underHeader"></div>
<div class="canvas" id="canvas">