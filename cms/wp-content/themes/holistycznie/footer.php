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
<footer class="footer">
  <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer__bottom">

            <div class="footer__bottomSide">
              Copyright 2018 &copy; <a href="./"><?= bloginfo( 'name' ); ?></a>
            </div>
            
            <div class="footer__bottomSide">
            Projekt i realzacja <a href="http://andfra1.github.io" rel="nofollow no-referrer" target="_blank">andfra</a>
            </div>
            

          </div>
        </div>

    </div>
    </div>
</footer>
</div><!-- #canvas -->

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
  <script src="<?= get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/main.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
