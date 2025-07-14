<?php get_header(); ?>

<section class="search-results">
  <div class="container">
    <h1 class="search-title">
      Search results for: <span><?php echo get_search_query(); ?></span>
    </h1>

    <?php if (have_posts()) : ?>
      <div class="search-grid">
        <?php while (have_posts()) : the_post(); ?>
          <article class="search-card">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="search-meta">
              <?php the_time('F j, Y'); ?> — <?php the_category(', '); ?>
            </p>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="pagination">
        <?php the_posts_pagination(); ?>
      </div>
    <?php else : ?>
      <p>No results found for "<strong><?php echo get_search_query(); ?></strong>".</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
