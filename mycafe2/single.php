<?php get_header(); ?>
single
<main id="main" class="container">
	<?php  if (have_posts()): 
	   	while (have_posts()) :the_post(); ?> 
			<h2><?php the_title(); ?></h2>
	   		<?php the_content(); 
	   	endwhile; 
	   endif; ?>

</main>

<?php get_footer(); ?>