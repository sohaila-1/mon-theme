<footer class="site-footer">
  <div class="container footer-flex">
    <div class="footer-brand">
      <h3>ESGI.</h3>
      <p>© <?php echo date("Y"); ?> Tous droits réservés.</p>
    </div>

    <div class="footer-contacts">
      <div class="contact-column">
        <p><strong>Manager</strong></p>
        <p>+33 1 23 45 67 89</p>
        <p>info@esgi.com</p>
      </div>
      <div class="contact-column">
        <p><strong>CEO</strong></p>
        <p>+33 1 23 45 67 89</p>
        <p>ceo@esgi.com</p>
      </div>
    </div>

    <div class="footer-social">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="LinkedIn"></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="Facebook"></a>
    </div>
  </div>
  <?php wp_footer(); ?>
</footer>
<script>
function toggleMenu() {
  document.getElementById('mobileMenu').classList.toggle('open');
}
</script>


</body>
</html>
