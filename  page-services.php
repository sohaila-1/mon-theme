<?php
/*
Template Name: Services Page
*/
get_header();
?>

<main class="services-page">
  <?php get_template_part('templates/parts/services'); ?>

  <section class="highlighted-service container">
    <h3>Corp. Parties</h3>
    <p>
      Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.
    </p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/picture.png" alt="Corp Event">
  </section>
</main>

<?php get_footer(); ?>
