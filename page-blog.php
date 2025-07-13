<?php
/* Template Name: Blog Page */
get_header(); ?>
<?php get_template_part('templates/parts/header'); ?>
<section class="blog-template container">
  <h2>Blog.</h2>

  <div class="blog-layout">
    <!-- Sidebar -->
    <aside class="blog-sidebar">
      <!-- Search -->
      <div class="sidebar-block">
        <form method="get" action="<?php echo home_url(); ?>">
          <input type="text" name="s" placeholder="Search">
        </form>
      </div>

      <!-- Recent Posts -->
      <div class="sidebar-block">
        <h4>Recent posts</h4>
        <ul>
          <?php
          $recent_posts = wp_get_recent_posts(array('numberposts' => 3));
          foreach ($recent_posts as $post) :
            echo '<li><a href="' . get_permalink($post['ID']) . '">' . $post['post_title'] . '</a></li>';
          endforeach;
          ?>
        </ul>
      </div>

      <!-- Archives -->
      <div class="sidebar-block">
        <h4>Archives</h4>
        <ul>
          <?php wp_get_archives(array('type' => 'monthly')); ?>
        </ul>
      </div>

      <!-- Categories -->
      <div class="sidebar-block">
        <h4>Categories</h4>
        <ul>
          <?php wp_list_categories(array('title_li' => '')); ?>
        </ul>
      </div>

      <!-- Tags -->
      <div class="sidebar-block">
        <h4>Tags</h4>
        <div class="tag-cloud">
          <?php wp_tag_cloud(); ?>
        </div>
      </div>
    </aside>

    <!-- Blog Posts -->
    <div class="blog-posts">
  <?php
  $query = new WP_Query(array('post_type' => 'post'));
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
      <article class="blog-card">
        <div class="blog-thumb">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
          </a>
        </div>
        <span class="category"><?php the_category(', '); ?></span>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
      </article>
   <?php 
  endwhile;
  // Pagination : s'affiche uniquement s'il y a des articles
  echo '<div class="blog-pagination">';
  echo paginate_links(array(
    'total' => $query->max_num_pages,
    'prev_text' => '&laquo;',
    'next_text' => '&raquo;',
  ));
  echo '</div>';

  wp_reset_postdata();

else :
  echo '<p>No posts found.</p>';
endif;
?>

  </div>
</section>
<div class="blog-pagination">
  <?php
    echo paginate_links(array(
      'total' => $query->max_num_pages ?? $wp_query->max_num_pages,
      'mid_size' => 2,
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;',
      'type' => 'list' // Optionnel, tu peux enlever si tu préfères inline
    ));
  ?>
</div>


<?php get_footer(); ?>
