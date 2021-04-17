<?php
include ('../include/setting.php');
include ('../include/functions.php') ;
$alert = '';
if( isset( $_POST['submit'] ) ){


unset( $_POST['submit'] );


$db = new DB();
Register::add( $_POST );
unset( $db );



  	header('location:../index.html');

}
?>


