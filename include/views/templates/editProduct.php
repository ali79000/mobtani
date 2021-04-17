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
<h1>ویرایش مشخصات محصول</h1>

<form class="form" action = "" method = "POST">	
<div id="f">
<label for="name" class="pf2">نام و مدل محصول</label>
<input class="input" type="text" id="name" name="name" placeholder="نام و مدل محصول را وارد کنید" value="<?php if(isset($row['name'])) echo $row['name']; ?>"/> 
</div>
<div id="f">
<label for="price" class="pf3">قیمت</label>
<input class="input1" type="number" name="price" id="price" placeholder="تومان" value="<?php if(isset($row['price'])) echo $row['price']; ?>"/>
</div>
<div id="f">
<label for = "file" class="pf3">تصویر محصول</label>
<input class="input1" type="file" name="imgSrc" id="file" value="<?php if(isset($row['imgSrc'])) echo $row['imgSrc']; ?>"/>
</div>
<div id="f">
<p class="pf4">توضیحات محصول</p>
<textarea class="input1" name="description" id="description" rows="30" cols="150" value="<?php if(isset($row['description'])) echo $row['description']; ?>"/></textarea>
<br>
</div>
<div id="f">
<input class="input2" type="submit" name = "submit" value="ویرایش" > 
</div>
</form>
</main>
 <footer>
 <p class="pf">*تمامی حقوق این سایت محفوظ است علی میرمحمدصادقی*</p>
 </footer>
 </body>
</html>