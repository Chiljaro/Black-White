<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.slides.min.js"></script>
	<script>
		$(function(){
			$("#slideshow").slidesjs({
				height: 200,
				navigation: false
			});
		});
  </script>	
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-58075493-1', 'auto');
      ga('send', 'pageview');
    </script>
	<?php wp_head(); ?>

</head>
<body>
	
	<header class="main-header">
		<div class="ed-container">
			<div class="ed-item s-70 l-30">
				<h2 class="logo">Primer Tema</h2>
			</div>
			<div class="ed-item s-30 l-70 cross-center main-end" >
				<div class="nav-toggle" id="main-nav-toggle"></div>
				<nav class="main-nav" id="main-nav">
					<?php wp_nav_menu(
						array(
						'container' => false,
						'items_wrap' => '<ul class="main-menu" id="main-menu">%3$s</ul>',
						'theme_location' => 'menu'	
						));
					?>
				</nav>
			</div>
		</div>

	</header>

	<main class="ed-container">
		
		
	