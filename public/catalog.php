<?php
	include '__php__.php';
	
	$db = new DB();
	$table = Product::find();
	unset( $db );
	
	$alerts = Alert::alerts();
	
	view('catalog', null, ['table' => $table], $alerts);
?>