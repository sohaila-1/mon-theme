<?php get_header(); ?>

<section class="single-template">
  <div class="container">
    <div class="single-layout">

      <aside class="blog-sidebar">
        <?php get_search_form(); ?>
        <div class="sidebar-block">
          <h4>Recent posts</h4>
          <ul>
            <?php
            $recent_posts = wp_get_recent_posts(['numberposts' => 5]);
            foreach ($recent_posts as $post) {
              echo '<li><a href="' . get_permalink($post["ID"]) . '">' . $post["post_title"] . '</a></li>';
            }
            ?>
          </ul>
        </div>

        <div class="sidebar-block">
          <h4>Archives</h4>
          <ul><?php wp_get_archives(); ?></ul>
        </div>

        <div class="sidebar-block">
          <h4>Categories</h4>
          <ul><?php wp_list_categories(['title_li' => '']); ?></ul>
        </div>

        <div class="sidebar-block">
          <h4>Tags</h4>
          <div class="tag-cloud"><?php wp_tag_cloud(); ?></div>
        </div>
      </aside>

      <div class="single-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <div class="meta"><?php echo get_the_date(); ?> | <?php the_category(', '); ?></div>

          <?php if (has_post_thumbnail()) : ?>
            <div class="featured-img"><?php the_post_thumbnail('large'); ?></div>
          <?php endif; ?>

          <div class="post-content"><?php the_content(); ?></div>

          <div class="post-tags"><?php the_tags('Tags: ', ', '); ?></div>

          <div class="comments"><?php comments_template(); ?></div>

        <?php endwhile; endif; ?>
      </div>

    </div> <!-- .single-layout -->
  </div> <!-- .container -->
</section>

<?php get_footer(); ?>
