<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="http://blog-cook.local/wp-content/themes/mytemp/style/bootstrap.min.css">
	<link rel="stylesheet" href="http://blog-cook.local/wp-content/themes/mytemp/style/style.css">
	
	<script src="http://blog-cook.local/wp-content/themes/mytemp/style/jquery-1.10.2.min.js"></script>
	<script src=http://blog-cook.local/wp-content/themes/mytemp/style/bootstrap.min.js"></script>
	
	<meta charset="utf-8">
	<title>Супер шаблон</title>
</head>

<body>
	
	<div class="container">
		
		<header>
			<div class="info">
				<img src="http://blog-cook.local/wp-content/themes/mytemp/images/logo.png" alt="" />
			</div>
			
			<div class="banner">
				
			</div>
		</header>
		
		<div class="navbar">
	        <div class="navbar-inner">
		        <ul class="nav">
<?php
			    if ( function_exists( 'wp_nav_menu' ) )
			        wp_nav_menu( 
				        array( 
				        'theme_location' => 'custom-menu',
				        'fallback_cb'=> 'custom_menu',
				        'container' => 'ul',
				        'menu_id' => 'nav',
				        'menu_class' => 'nav') 
					);
			    else custom_menu();
				?>
		        </ul>
	        </div>
        </div>

