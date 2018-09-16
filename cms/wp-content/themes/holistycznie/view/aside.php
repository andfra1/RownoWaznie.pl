<!-- <aside class="col-sm-12 col-md-3 col-md-offset-1 aside"> -->
  <aside class="aside">
    <div class="bio">
      <div class="bio__avatar">
      <img src="<?= get_field('omnie-zdjecie', 'option')['url']; ?>" alt="<?= get_field('omnie-zdjecie', 'option')['alt']; ?>">
      </div>
      <div class="bio__info">
        <?= get_field('omnie-tresc', 'option'); ?>
      </div>
    </div>
    
    <div class="archives">
      <span>Archiwum</span>
    <select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
    <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
    <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
  </select>
    </div>
</aside>