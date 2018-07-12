<?php get_header(); ?>
single.php
<?php
  if (have_posts()):
    while(have_posts()):the_post();
      get_template_part('content');
    endwhile;
  endif;
?>

<?php get_footer(); ?>