<html>
<head>
 <title><?php bloginfo('name'); ?></title>
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
 <link rel="stylesheet" type="text/css" href="./font/stylesheet.css">
</head>
<body>
<div id="wrapper">
<div id="header">
 <img id="banner" alt="banner" src="wp-content/themes/valette/img/banner.jpg">
</div>

<?php wp_nav_menu( array( 'theme_location' => 'Main_menu',
							'menu_id' => 'main_menu',
							'container_id' => 'test', ) ); ?>