<section class="services container">
  <h2><?php echo esc_html(get_theme_mod('services_title')); ?></h2>
  <div class="services-grid">
    <?php for ($i = 1; $i <= 3; $i++): ?>
      <div class="service-item">
        <img src="<?php echo esc_url(get_theme_mod("service_{$i}_image")); ?>" alt="">
        <h3><?php echo esc_html(get_theme_mod("service_{$i}_title")); ?></h3>
      </div>
    <?php endfor; ?>
  </div>
</section>
