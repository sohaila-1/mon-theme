<?php get_header(); ?>

<section class="page-404">
  <div class="container">
    <h1>404 Error.</h1>
    <p>The page you were looking for couldn't be found.<br>Maybe try a search?</p>
    
    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
      <input type="search" class="search-field" placeholder="Type something to search..." value="" name="s" />
      <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</section>

<?php get_footer(); ?>
