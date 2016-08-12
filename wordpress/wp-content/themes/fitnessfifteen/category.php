<?php get_header(); ?>
<ul id="blog-nav">
    <li>Home</li>
    <li>Blog</li>
</ul>
<div id="above-nav">
    <img src="/FitnessFifteen/wordpress/wp-content/themes/fitnessfifteen/images/Fitness-Fifteen-Logo.jpg">
</div>
<ul id="categories-list">
    <?php //categories navigation
        wp_list_categories('title_li=0');
    ?>
</ul>

<?php
    if (is_category( )) {
        $cat = get_query_var('cat');
        $yourcat = get_category ($cat);
        $slug = $yourcat->slug;
    }
?>
<?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'paged' => $paged,
    'category_name' => $slug
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>
    <div id="posts-list">
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                <div id="post-<?php the_ID(); ?>" class="postContainer">
                    <div class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url( );?>); background-repeat:no-repeat; background-position: center center;">
                    </div>
                    <div class="post-title">
                            <?php the_title(); ?>
                    </div>
                </div>
            </a>
        <?php endwhile; ?>

        <!-- Pagination Links here -->
        <?php
            if (function_exists(custom_pagination)) {
                custom_pagination($custom_query->max_num_pages,"",$paged);
            }
        ?>

        <?php wp_reset_postdata(); ?>

        <!-- if no posts exist -->
        <?php else: ?>
            <article>
                <h1>Sorry...</h1>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          </article>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
