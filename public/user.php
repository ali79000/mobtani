<?php
	include '__php__.php';	
$db=new DB();
$table=Register::find();
unset($db);
$alerts=alerts();

include ('views/user.php');
?>