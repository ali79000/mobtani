<?php
include ('../include/setting.php');
include ('../include/functions.php');

	if( isset( $_GET['id'] ) ) {		
		
		$db = new DB();
		$table = messages::delete($_GET['id']);		
		unset( $db );
		
	}
	else{
		alerts('شناسه کاربر نامشخص!');
		//redirect
	}
	
	$alerts = alerts();
	include '../include/views/deleteTamasbama.php';
?>