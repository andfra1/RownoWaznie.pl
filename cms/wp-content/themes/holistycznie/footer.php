<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<?php
$footer = [
  'bottom' => [
    'left' => 'Copyright 2018 &copy; <a href="./">holistycznie.pl</a>',
    'right' => 'Projekt i realzacja <a href="http://andfra1.github.io" rel="noreferrer" target="_blank">andfra</a>'
  ]
];
?>

<footer class="footer">
  <div class="container">
      <div class="row">
        <?php if ( !empty($footer['bottom']) ) : ?>
        <div class="col-lg-12">
          <div class="footer__bottom">

            <?php foreach( $footer['bottom'] as $side => $value ) : ?>
            <div class="footer__bottomSide">

              <?php if( is_array($value) ) : ?>
              <ul>

                <?php foreach( $value as $elem => $link ) : ?>
                <li>
                  <a href="<?= $link?>" title="">
                    <?= $elem; ?>
                  </a>
                </li>
                <?php endforeach; ?>

              </ul>
              <?php else : ?>
              <?= $value; ?>
                <?php endif; ?>

            </div>
            <?php endforeach; ?>

          </div>
        </div>
      
    <?php endif; ?>
    </div>    
    </div>
</footer>
</div><!-- #canvas -->

<script src="<?= get_template_directory_uri(); ?>/assets/js/main.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
