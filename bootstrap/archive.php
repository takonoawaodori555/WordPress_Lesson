<section>
  <h2><?php $category = get_the_category();
                   echo $category[0]->cat_name;
          ?>
  </h2>
  <?php if (have_posts()):
               while (have_posts()) : the_post(); ?>
                 <article>
                   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                   <?php the_content(); ?>
                 </article>
              <?php endwhile;
  endif; ?>
</section>