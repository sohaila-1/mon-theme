<section class="aboutus-details container">
  <div class="aboutus-flex">
    <div class="aboutus-img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="Photographer">
    </div>

    <div class="aboutus-text">
      <?php for ($i = 1; $i <= 3; $i++): ?>
        <div class="block">
          <h3><?php echo esc_html(get_theme_mod("about_block{$i}_title")); ?></h3>
          <p><?php echo wp_kses_post(get_theme_mod("about_block{$i}_text")); ?></p>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>
