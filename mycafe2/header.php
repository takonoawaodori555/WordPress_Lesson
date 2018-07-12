<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>Cafe Leaf</title>
<meta name="description" content="">
<meta name="keywords" content="">

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic' rel='stylesheet' type='text/css'>

<!-- stylesheets -->
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>
<body>
<header id="header">
	<div class="container">
		<h1 class="top-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_header.png" alt="おいしい紅茶と手作り焼き菓子の店 Cafe Leaf"></a></h1>
	</div>
</header><!-- /#header -->
<nav id="gnav">
	<?php wp_nav_menu( array( 'theme_location' => 'global' ) ); ?>
	<!-- <ul class="container">
		<li><a href="#">Home</a></li>
		<li><a href="#">Concept</a></li>
		<li><a href="#">Menu</a></li>
		<li><a href="#">Access</a></li>
	</ul> -->
</nav><!-- /#gnav -->
