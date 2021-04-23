<?php
include ('../include/setting.php');
include ('../include/functions.php');

if(isset($_GET['id'])){
    $db=new DB();
$table=Product::delete($_GET['id']);
 unset( $db );

}

else
{
alerts('شناسه کاربر نامشخص!');
}
$alerts=alerts();
echo $alerts;
include ('../include/views/templates/deleteProduct.php');
?>