<?php
// カスタムメニュー
register_nav_menus( array(
'place_global' => 'グローバル',
'place_footer' => 'フッター', ) );

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
return is_array($var) ? array_intersect($var, array( 'currentmenu-
item' )) : '';
}

add_theme_support( 'post-thumbnails' );

/* カスタム投稿タイプの追加 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
register_post_type( 'AI', /* post-type */
array( 'labels' => array( 'name' => __( '人工知能' ),
'singular_name' => __( '人工知能' ) ),
'public' => true,
'menu_position' =>5
)
);
}
/*タクソノミーの追加*/
register_taxonomy(
'AIcat', /* タクソノミーの名前 */
'ai', /* AI投稿で設定する */
array(
'hierarchical' => true, /* 親子関係が必要なければ false */
'update_count_callback' => '_update_post_term_count',
'label' => '人工知能のカテゴリー',
'singular_label' => '人工知能のカテゴリー',
'public' => true,
'show_ui' => true
)
);