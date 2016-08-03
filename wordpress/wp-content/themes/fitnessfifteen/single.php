<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 id="post-title"><?php the_title(); ?></h1>
<div id="post-info"> By: <?php the_author(); ?> <span class="highlight"><?php the_date(); ?></span></div>
<div id="post-content-container">
	<div id="post-content">
		<!-- Post Content -->
		<?php the_content(); ?>
	</div>
</div>


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
                  
