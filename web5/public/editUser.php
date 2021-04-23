<?php
include ('../include/setting.php');
include ('../include/functions.php');

if(isset($_GET['id'])){
    $db=new DB();

    if( isset( $_POST['submit'] ) ){

    $parameters=$_POST;
     unset( $parameters['submit'] );
     $parameters['id']=$_GET['id'];
      $table=Register::update( $parameters );

    }

$table=Register::find("id={$_GET['id']}");
$row=$table[0];
 unset( $db );

}

else
{
alerts('شناسه کاربر نامشخص!','error');
}
$alerts=alerts();
include ('../include/views/templates/editUser.php');
?>