<section class="partners container">
  <h2><?php echo esc_html(get_theme_mod('partners_title', 'Our Partners.')); ?></h2>

  <div class="partners-logos">
    <?php for ($i = 1; $i <= 5; $i++): ?>
      <?php $logo = get_theme_mod("partner_logo_{$i}"); ?>
      <?php if ($logo): ?>
        <img src="<?php echo esc_url($logo); ?>" alt="Partner Logo <?php echo $i; ?>">
      <?php endif; ?>
    <?php endfor; ?>
  </div>
</section>
