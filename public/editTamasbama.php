<?php
include ('../include/setting.php');
include ('../include/functions.php');

if( isset( $_GET['id'] ) ) {
		
		
		if( isset( $_POST['submit'] ) ){

			$parameters = $_POST;
			unset( $parameters['submit'] );
			$parameters['id'] = $_GET['id'];
			$db = new DB();
			$table = messages::update( $parameters );
			unset( $db );			
		}
		
		$db = new DB();
		$table = messages::find("id = {$_GET['id']}");
		$row = $table[0];
		
		unset( $db );
		
	}

else
{
alerts('شناسه پیام ارسالی نامشخص!','error');
}
	$alerts = alerts();
	echo $alerts;
include ('../include/views/editTamasbama.php');
?>
