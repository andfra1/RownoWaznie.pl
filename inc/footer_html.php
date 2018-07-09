<footer class="footer">
  <div class="container border-top">
    <?php if ( !empty($footer['top']) ) : ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="footer__top">

          <?php foreach( $footer['top'] as $item => $content ) : ?>
          <div class="footer__topItems">
            <h3>
              <?= $item; ?>
            </h3>

            <?php if( is_array($content) ) : ?>
            <ul>

              <?php foreach( $content as $text => $link ) : ?>
              <li>
                <a href="<?= $link?>" title="<?= $text; ?>">
                  <?= $text; ?>
                </a>
              </li>
              <?php endforeach; ?>

            </ul>
            <?php else : ?>

            <p>
              <?= $content; ?>
            </p>
            <?php endif; ?>

          </div>
          <?php endforeach; ?>

        </div>
      </div>
      <?php endif; ?>


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
      </div>
    </div>
    <?php endif; ?>
  </div>
</footer>

<?php include_once('inc/footer.php'); ?>