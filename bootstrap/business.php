<?php $args = array(
'numberposts' => 1, //表示（取得）する記事の数
'post_type' => 'AI' //投稿タイプの指定
);
$customPosts = get_posts($args);
if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post ); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="taxonomies">
<?php echo get_the_term_list( $post->ID, 'AIcat', '分類', ', ', '' );?>
</p>
<div class="custom-post-content">
<?php the_content();?>
</div>
<?php endforeach; ?>
<?php endif;
wp_reset_postdata(); //クエリのリセット ?>