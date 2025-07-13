<?php
/* Template Name: Contacts Page */
get_header();
?>
<?php get_template_part('templates/parts/header'); ?>
<main class="contact-page container">
  
  <section class="contact-intro">
    <h2>Contacts.</h2>
    <p>A desire for a big big party or a very select congress? Contact us.</p>

    <div class="contact-infos">
      <div>
        <strong>Location</strong><br>
        242 Rue du Faubourg Saint-Antoine<br>
        75012 Paris FRANCE
      </div>
      <div>
        <strong>Manager</strong><br>
        +33 1 23 45 67 89<br>
        info@company.com
      </div>
      <div>
        <strong>CEO</strong><br>
        +33 1 23 45 67 89<br>
        ceo@company.com
      </div>
    </div>

    <div class="contact-banner">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.png" alt="Contact Banner">
    </div>
  </section>

  <section class="contact-form">
    <h3>Write us here</h3>
    <p>Go! Don’t be shy.</p>

    <form>
      <input type="text" placeholder="Subject">
      <div class="input-row">
        <input type="email" placeholder="Email">
        <input type="text" placeholder="Phone no.">
      </div>
      <textarea placeholder="Message"></textarea>
      <button type="submit">Submit</button>
    </form>
  </section>
</main>

<?php get_footer(); ?>
