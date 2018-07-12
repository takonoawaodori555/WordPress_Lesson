<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php
wp_title( ' | ', true, 'right' );
bloginfo( 'name' );
echo ' ¦ ';
bloginfo( 'description' );
global $page, $paged;
if ( $paged >= 2 || $page >= 2 ) {
echo ' | ' . max( $paged, $page ) . 'ページ';
}
?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.css">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
<!-- header -->
<header class="navbar navbar-expand-md navbar-light">
  <h1><a class="navbar-brand" href="#">
    <img src="<?php echo get_template_directory_uri(); ?>/images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-middle" alt="">
    Bootstrap
  </a></h1>
<!-- ナビゲーション -->
<?php wp_nav_menu(array(
'container' => 'nav',
'container_id' => 'global-nav',
'theme_location' => 'place_global',
));
?>
<!-- ナビゲーション終了 -->
</header>
<!-- header終了 -->