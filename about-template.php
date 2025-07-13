<?php
/*
Template Name: About Page
*/
get_header(); ?>

<main class="about-page">
  <?php get_template_part('templates/parts/header'); ?>
  <?php get_template_part('templates/parts/about-page-header'); ?>
  <?php get_template_part('templates/parts/about-page-intro'); ?>
  <?php get_template_part('templates/parts/about-page-details'); ?>
  <?php get_template_part('templates/parts/about-page-team'); ?>
</main>

<?php get_footer(); ?>
