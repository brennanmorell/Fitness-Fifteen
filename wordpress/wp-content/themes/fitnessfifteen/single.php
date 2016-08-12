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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 id="post-title"><?php the_title(); ?></h1>
<div id="post-info">by <?php the_author(); ?> <?php the_date(); ?> in <span class="highlight"> <?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; echo $firstCategory; ?></span> </div>
<div id="post-content-container">
	<div id="post-content">
		<!-- Post Content -->
		<?php the_content(); ?>
	</div>
</div>


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
                  
