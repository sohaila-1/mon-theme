<section class="aboutus-team container">
  <h2><?php echo esc_html(get_theme_mod('team_section_title')); ?></h2>

  <div class="team-grid">
    <?php for ($i = 1; $i <= 4; $i++): ?>
      <div class="team-member">
        <img src="<?php echo esc_url(get_theme_mod("team_member_{$i}_image")); ?>" alt="">
        <h4><?php echo esc_html(get_theme_mod("team_member_{$i}_role")); ?></h4>
        <p>
          <?php echo esc_html(get_theme_mod("team_member_{$i}_phone")); ?><br>
          <?php echo esc_html(get_theme_mod("team_member_{$i}_email")); ?>
        </p>
      </div>
    <?php endfor; ?>
  </div>
</section>
