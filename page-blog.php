<?php get_header(); ?>

<section class="blog-template">
  <div class="container">
    <h2>Blog.</h2>
    <div class="blog-layout">

      <aside class="blog-sidebar">
        <h3>Search</h3>
        <?php get_search_form(); ?>
        <br><br>
        <div class="sidebar-block">
          <h4>Recent posts</h4>
          <br>
          <ul>
            <?php
            $recent_posts = wp_get_recent_posts(['numberposts' => 5]);
            foreach ($recent_posts as $post) {
              echo '<li><a href="' . get_permalink($post["ID"]) . '">' . $post["post_title"] . '</a></li>';
            }
            ?>
          </ul>
        </div>
<br>
        <div class="sidebar-block">
          
          <h4>Archives</h4>
          <ul><?php wp_get_archives(); ?></ul>
        </div>
          <br> 
        <div class="sidebar-block">
          <h4>Categories</h4>
          <ul><?php wp_list_categories(['title_li' => '']); ?></ul>
        </div>
<br>
        <div class="sidebar-block">
          <h4>Tags</h4>
          <div class="tag-cloud"><?php wp_tag_cloud(); ?></div>
        </div>
      </aside>

      <div class="blog-posts">
        <?php
        $blog_query = new WP_Query([
          'post_type' => 'post',
          'posts_per_page' => 6
        ]);

        if ($blog_query->have_posts()) :
          while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <article class="blog-card">
              <div class="blog-thumb">
                <a href="<?php the_permalink(); ?>">
                 <?php if (has_post_thumbnail()) : ?>
  <?php the_post_thumbnail('medium'); ?>
<?php else : ?>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg" alt="Default thumbnail" />
<?php endif; ?>

                </a>
              </div>
              <span class="category"><?php the_category(', '); ?></span>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            </article>
        <?php endwhile; wp_reset_postdata();
        else :
          echo '<p>No posts found.</p>';
        endif;
        ?>
      </div>
    </div>

    <div class="blog-pagination">
      <?php the_posts_pagination(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
