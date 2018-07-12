<div id="main404">
<h1>404エラー</h1>
<img src="<?php echo get_bloginfo('template_url') ?>/images/404.png"
alt="404ERROR" />
<p>お探しのページが見られない場合は、以下のフォームで検索してみてください。</p>
<?php get_search_form(); ?>
<p> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo
get_bloginfo( 'name', 'display' ); ?>" rel="home">
<?php bloginfo( 'name' ); ?>
のトップページへ戻る</a> </p>
</div>