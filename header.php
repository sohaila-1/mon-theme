<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<style>
.logo-mobile .site-title {
  display: block;
  font-size: 1.5rem;
  color: white;
}
</style>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container header-flex">
    <div class="logo">
      <a href="<?php echo home_url(); ?>">ESGI<span class="dot">.</span></a>
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  </div>

  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-inner">
      
      <div class="menu-header">
        <div class="logo-mobile">
          <div class="site-title">
            ESGI<span class="dot">.</span>
          </div>
        </div>
        <p class="search-hint">Or try Search</p>
        <span class="close-menu" onclick="toggleMenu()">×</span>
      </div>

      <?php
      wp_nav_menu([
        'theme_location' => 'main_menu',
        'container' => false,
        'menu_class' => 'mobile-nav',
        'fallback_cb' => false,
      ]);
      ?>
    </div>
  </div>
</header>
