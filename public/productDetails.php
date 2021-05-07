<?php
	include '__php__.php';	
	if( isset( $_GET['id'] ) ) {
		$db = new DB();
		$table = Product::find("id = {$_GET['id']}");	
		unset( $db );
		$row = $table[0];
		$alerts = alerts();
		
		include ('views/productDetails.php');
	}
	else{
		alerts('شناسه محصول نامشخص!');
		redirect('catalog.php');
	}
	?>