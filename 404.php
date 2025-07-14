<?php get_header(); ?>

<section class="error-404">
  <div class="container">
    <h1>404 Error.</h1>
    <p>The page you were looking for couldn’t be found.<br>Maybe try a search?</p>

    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
      <input type="search" class="search-field" name="s" placeholder="Type something to search..." />
      <button type="submit" class="search-submit" aria-label="Search">🔍</button>
    </form>
  </div>
</section>

<?php get_footer(); ?>
