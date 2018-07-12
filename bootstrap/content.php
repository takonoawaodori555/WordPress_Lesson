<article>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <div class="pagenav">
    <span class="old">
      <?php previous_post_link('%link' ); ?>
    </span>
    <span class="new">
      <?php next_post_link('%link' ); ?>
    </span>
  </div>
</article>