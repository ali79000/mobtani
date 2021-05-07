<?php
	include '__php__.php';
	
	$db = new DB();
	$table = messages::find();
	unset( $db );
	
	$alerts = Alert::alerts();
	
	view('message', null, ['table' => $table], $alerts);
?>

