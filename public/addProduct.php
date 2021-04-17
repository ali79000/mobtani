<?php
include ('../include/setting.php');
include ('../include/functions.php') ;
$alert = '';
if( isset( $_POST['submit'] ) ){
$imgSrc = 'assets/images/image.jpg';

unset( $_POST['submit'] );
$_POST['imgSrc'] = $imgSrc;

$db = new DB();
Product::add( $_POST );
unset( $db );

$alerts = alertTemplate('با موفقیت ثبت شد!', 'success');
}
?>

<!doctype html>
<html lang="fa">
<head>
<title>PcShop</title>
<meta charset = 'utf-8'>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
<style>
body{
font-size:large;
}
</style>

<link   href="assets/css/style.css"   rel="stylesheet"   type="text/css">
	<link media = "screen AND (max-width:991px)" rel = "stylesheet" href = "assets/css/mobile.css">
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
	<link rel = "stylesheet" href = "assets/css/responsiveNav.css">
</head>
	<body class="body">
	<header>
	<nav id = "mainNav">

    </nav>

</header>

<main>
	<?php
				if( isset($alerts) )
					echo $alerts;
			?>    
         <div class="sabtt">  
  <a class="sabttt" href="addProduct.html">بازگشت</a>
        </div>  
</main>
 <footer>
 <p class="pf">*تمامی حقوق این سایت محفوظ است علی میرمحمدصادقی*</p>
 </footer>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	
 </body>
</html>
