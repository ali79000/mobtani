<!doctype html>
<html lang="fa">
<head>
<title>PcShop</title>
<meta charset = 'utf-8'>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
<style>
body{
font-size:large;
}
</style>

<link   href="assets/css/style.css"   rel="stylesheet"   type="text/css">
	<link media = "screen AND (max-width:991px)" rel = "stylesheet" href = "assets/css/mobile.css">
	<link rel = "stylesheet" href = "assets/css/responsiveNav.css">
</head>

	<body class="body">
	<?php get_header(); ?>
<main>
<?php
				foreach($table as $row){
					get_template_part('showUsers', null, $row);
				}
			?>
</main>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
 </body>
</html>