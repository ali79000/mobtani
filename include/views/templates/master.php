<!doctype html>
<html lang="fa">
<head>
<title>PcShop</title>
<?php get_template_part('head'); ?>	
</head>

	<body class="body">
	
<?php get_header(); ?>
<main>
	<?php
				//main();
				if( isset($alerts) )
					echo $alerts;
				
				if( isset($main) )
					eval( $main );
			?>
</main>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>
        <?php get_template_part('scripts'); ?>	
 </body>
</html>