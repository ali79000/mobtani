<?php
	include '__php__.php';
	
	$db = new DB();
	$table = Register::find();
	unset( $db );
	
	$alerts = Alert::alerts();
	
	view('user', null, ['table' => $table], $alerts);
?>

