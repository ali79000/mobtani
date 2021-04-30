<?php
include ('../include/setting.php');
include ('../include/functions.php') ;
	if( isset( $_GET['id'] ) ) {
		$db = new DB();
		$table = Product::find("id = {$_GET['id']}");	
		unset( $db );
		$row = $table[0];
		$alerts = alerts();
		
		include ('../include/views/productDetails.php');
	}
	else{
		alerts('شناسه کاربر نامشخص!');
		redirect('catalog.php');
	}
	?>