<?php get_header(); ?>
    <div id="posts-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                <div id="post-<?php the_ID(); ?>" class="postContainer">
                    <div class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url( );?>); background-repeat:no-repeat; background-position: center center;">
                    </div>
                    <div class="post-title">
                            <?php the_title(); ?>
                    </div>
                   <!-- <span class="author">
                        Author:
                        <?php the_author(); ?> 
                    </span>
                    <span class="date">
                        Date:
                        <?php echo get_the_date(); //date has to be echoed?> 
                    </span>
                    <span>
                        Excerpt:
                        <?php echo get_the_excerpt() ?> 
                    </span> -->
                </div>
            </a>
            <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
