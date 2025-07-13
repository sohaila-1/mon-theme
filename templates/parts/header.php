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
        <a href="<?php echo home_url(); ?>">ESGI<span class="dot">.</span></a>
        <p>Or try Search</p>
        <span class="close-menu" onclick="toggleMenu()">×</span>
      </div>
      <nav class="mobile-nav">
        <a href="front-page.php">Home</a>
        <a href="about-template.php">About Us</a>
        <a href="page-services.php">Services</a>
        <a href="partners-template.php">Partners</a>
        <a href="blog-template.php">Blog</a>
        <a href="contacts-template.php">Contacts</a>
      </nav>
    </div>
  </div>
</header>
