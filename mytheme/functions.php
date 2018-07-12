<?php

//ウィジェット
register_sidebar( array('id' => 'sidebar-1') );

//RSSフィード
add_theme_support('automatic-feed-links');

//カスタムメニュー
register_nav_menu('navigation','ナビゲーション');

//カスタムヘッダー
add_theme_support( 
  'custom-header',
  array('width' => 1500,'height' => 250,'default-image' => '%s/header-1500x250.jpg')
);
//カスタム背景
add_theme_support( 'custom-background' );

//概要(抜粋)の文字数
function my_length($length){
  return 70;
}
add_filter('excerpt_mblength','my_length');

//概要(抜粋)の省略記号
function my_more($more){
  return '…';
}
add_filter('excerpt_more','my_more');

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );