<?php get_header(); ?>
<main id="main" class="container">

	<div id="intro" class="full">
		<div class="intro-text">
			   <?php
        $args = array(
             'include' => array(5),
             'post_type' => 'page',
             'order' => 'ASC'
        ); ?>
        <?php $my_posts = get_posts( $args ); ?>
        <?php global $post;/* グローバル変数から値を取得 */
             foreach ( $my_posts as $post ) :
             setup_postdata( $post ); ?>
              <?php the_content(); ?>
        <?php endforeach; ?><!-- ここまでサブループ。-->
        <?php wp_reset_postdata(); ?><!-- 忘れずにリセットする必要がある -->

		</div><!-- /.intro-text -->
		<div class="intro-map">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3241.177172339873!2d139.72505595!3d35.672639249999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5p2x5Lqs6YO95riv5Yy66Z2S5bGxMS0x!5e0!3m2!1sja!2sjp!4v1439816808418" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div><!-- /.map -->
			<address>
				<p>東京都港区青山1-x-x 第一青山ビル1F</p>
				<p><a href="tel:03-0000-0000" class="btn-tel">03-0000-0000</a></p>
			</address>
		</div><!-- /.intro-map -->
	</div><!-- /#intro -->
	
	<section id="menu">
		<h2 class="heading">Pickup Menu <a href="#" class="more">more</a></h2>
		<ul class="menu-list">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ph_menu01.jpg" alt="">
				<p class="menu-text">ダージリン<br><b>800円</b></p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ph_menu02.jpg" alt="">
				<p class="menu-text">ロイヤルミルクティー<br><b>850円</b></p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ph_menu03.jpg" alt="">
				<p class="menu-text">ハーブティー<br><b>700円</b></p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ph_menu04.jpg" alt="">
				<p class="menu-text">プレーンワッフル<br><b>400円</b></p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ph_menu05.jpg" alt="">
				<p class="menu-text">アップルパイ<br><b>550円</b></p>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/img/ph_menu06.jpg" alt="">
				<p class="menu-text">マドレーヌ<br><b>300円</b></p>
			</li>
		</ul>
	</section><!-- /#menu -->
	
	<section id="info">
		<h2 class="heading">Information <a href="#" class="more">more</a></h2>
		<dl class="info-list">
 <?php
   $newslist = get_posts( array(
    'category_name' => 'news', //ニュースのカテゴリースラッグを指定
    'posts_per_page' => 3 //取得記事件数
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
 ?>
 <dt><?php the_time('Y年n月j日'); ?></dt>
 <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
<?php
  endforeach;
  wp_reset_postdata();
?>
		</dl>
	</section><!-- /#info -->
	
	<section id="staff" class="full">
		<div class="staff-photo"><img src="<?php echo get_template_directory_uri(); ?>/img/ph_staff.jpg" alt="スタッフ近影"></div>
		<div class="staff-msg">
			<h2 class="staff-heading">スタッフから一言</h2>
			<p>ティーインストラクターの資格を持つスタッフが、一杯ずつ丁寧にお入れします。</p>
		</div>
	</section><!-- /#staff -->
	
	<aside id="banner">
		<ul class="banner-list clearfix">
			<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/bnr_blog.jpg" alt="ブログ始めました"></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/bnr_lesson.jpg" alt="紅茶教室のご案内"></a></li>
			<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/bnr_recipe.jpg" alt="焼き菓子レシピ"></a></li>
		</ul>
	</aside><!-- /#banner -->
</main><!-- /#main -->

<?php get_footer(); ?>