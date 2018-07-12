<?php get_header(); ?>
front-page.php
<!-- スライドショー -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slide1.JPG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slide2.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/slide3.JPG" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- スライドショー終了 -->
<!-- news page -->
<section>
<h2>ニュース</h2>
<ul class="list-unstyled">
<?php
$args = array(
'numberposts' => 5,
//取得する投稿の数
'offset' => 0,
//先頭から何件の投稿を除外するか
'orderby' => 'post_date',
//様々な値で並べ替える
'order' => 'DESC',
//$orderby でのソート方式。'ASC' - 昇順(低から高)。'DESC' - 降順(高から低)。
'post_type' => 'post',
//表示する投稿のタイプ。post、page、any（全て）等
'post_status' => 'publish'
//指定したステータスの投稿を表示
);
$myposts = get_posts('category_name=news'&$args);
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<li>
<div class="date"><?php the_time('Y/n/j'); ?></div>
<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
</li>
<?php endforeach;
wp_reset_postdata();?>
</ul>
</section>

<!-- 事業案内 -->
<section>
<?php
$args = array(
'include' => array(8)
); ?>
<?php $my_posts = get_pages( $args ); ?>
<?php
foreach ( $my_posts as $post ) :
setup_postdata( $post ); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endforeach;?>
<?php wp_reset_postdata(); ?>
<?php 
  $mypages = get_pages( array( 'post_type' => 'page','sort_order' => 'asc','child_of' => 8) );
  foreach( $mypages as $post ):setup_postdata($post); ?>
    <section class="col-md-4">
      <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h3>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail_top',
array('alt' => the_title_attribute('echo=0'),'class' => 'img-fluid mx-auto d-block')); ?></a>
      <p class="entry"><?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">[詳細ページへ]</a></p>
    </section>
<?php endforeach; ?>
<div class="row">
<section class="col-md-4">
<h3 class="text-center">宇宙開発事業</h3>
<img src="<?php echo get_template_directory_uri(); ?>/images/space.jpg" class="img-fluid mx-auto d-block" alt="宇宙開発事業">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nostrum laboriosam dolor, ut, voluptatem sunt illo eveniet. Amet sed facere, incidunt nemo consectetur omnis. Voluptates blanditiis perferendis, ratione molestias voluptatum?</p>
</section>
<section class="col-md-4">
<h3 class="text-center">ロボット開発事業</h3>
<img src="<?php echo get_template_directory_uri(); ?>/images/robot.jpg" class="img-fluid mx-auto d-block" alt="ロボット開発事業">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nostrum laboriosam dolor, ut, voluptatem sunt illo eveniet. Amet sed facere, incidunt nemo consectetur omnis. Voluptates blanditiis perferendis, ratione molestias voluptatum?</p>
</section>
<section class="col-md-4">
<h3 class="text-center">AI開発事業部</h3>
<img src="<?php echo get_template_directory_uri(); ?>/images/ai.jpg" class="img-fluid mx-auto d-block" alt="AI開発事業部">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore nostrum laboriosam dolor, ut, voluptatem sunt illo eveniet. Amet sed facere, incidunt nemo consectetur omnis. Voluptates blanditiis perferendis, ratione molestias voluptatum?</p>
</section>
</div>	
</section>
<!-- 事業案内終了 -->

<?php get_footer(); ?>