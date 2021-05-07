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
	<link rel = "stylesheet" href = "assets/css/responsiveNav.css">
</head>

	<body class="body">
	<header>



     
	<nav id = "mainNav">
		<ul>
  <li> <a href="../index.html">خانه</a> </li>
   <li> <a href="#">خرید</a> </li>
  <li> <a href="addProduct.html">فروش</a> </li>
  <li> <a href="tamasbama.html">تماس با ما</a> </li>
  <li> <a href="#">درباره ما </a> </li>
    </ul>
 
    </nav>
     <div>
        <ul  id="left">
    <li> <a href="register.html">ناحیه کاربری</a> </li>
  </ul>
  </div>
     <div>
     <img class="icon" src="assets/icon/2.png"/>
  </div>
</header>

<main>
<h1>حذف محصول</h1>
	<?php
				if( isset($alerts) )
					echo $alerts;
			?>

</main>
 <footer>
 <p class="pf">*تمامی حقوق این سایت محفوظ است علی میرمحمدصادقی*</p>
 </footer>
 </body>
</html>