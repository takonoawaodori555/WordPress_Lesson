<?php get_header(); ?>
index.php
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
	<li><div class="date">2017/09/24</div>
    <div class="title"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></div>
  </li>
	<li><div class="date">2017/09/20</div>
    <div class="title"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></div>
  </li>
  <li><div class="date">2017/09/18</div>
    <div class="title"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></div>
  </li>
  <li><div class="date">2017/09/15</div>
    <div class="title"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></div>
  </li>
  <li><div class="date">2017/09/04</div>
    <div class="title"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </a></div>
  </li>
</ul>
</section>
<!-- news page終了 -->
<!-- 事業案内 -->
<section>
<h2>事業案内</h2>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod nam ipsum adipisci ex sit eum, numquam amet vel repellat nulla, facere qui! Cumque beatae numquam eos architecto, nisi illum reprehenderit.
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