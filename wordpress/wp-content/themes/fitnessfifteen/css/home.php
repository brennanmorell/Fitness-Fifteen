<?php get_header(); ?>
<!-- <section id="blog" class="section-body">-->
   <!-- <h1 class="section-head">Blog</h1>
    <h1 class="sub-head">(We write stuff for you)</h1> -->
    <div id="posts-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" class="postContainer">
                <div class="thumbnail" style="background-image: url(<?php the_post_thumbnail_url( );?>);" ?>></div>
                <span class="title">
                    <strong>Title:</strong>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </span>
                <span class="author">
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
                </span>
            </div>
            <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
<!--</section>-->
<?php get_footer(); ?>
