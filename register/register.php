<?php
include ('../include/setting.php');
include ('../include/functions.php') ;
$alert = '';
if( isset( $_POST['submit'] ) ){

	$sql = "INSERT INTO register (name, pass, email, mobile) 
	VALUES('{$_POST['user']}', '{$_POST['password']}', '{$_POST['email']}', '{$_POST['mobile']}')";

$db = new DB();

$result = $db -> execute( $sql );
unset( $db );


if( $result )	
	$alert = alertTemplate('ثبت نام با موفقیت انجام شد!', 'success');

$_SESSION['name'] = $user;
  	$_SESSION['success'] = "You are now logged in";
  	header('location:../index.html');


}
?>


