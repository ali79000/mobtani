<?php
	include '__php__.php';	
$db=new DB();
$table=messages::find();
unset($db);
$alerts=alerts();

include ('views/message.php');
?>