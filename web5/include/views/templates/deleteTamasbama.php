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
<h1>حذف پیام</h1>

<form  class="form" action = "" method = "POST">
<div id="f">
<label for="name" class="pf2">نام کاربری</label>
<input class="input" type="text" id="name" name="name" placeholder="نام کاربری" value="<?php if(isset($row['name'])) echo $row['name']; ?>"/> 
</div>
<div id="f">
<label for="email" class="pf3">ایمیل</label>
<input class="input" type="text" name="email" id="email" placeholder="ایمیل خود را وارد کنید" value="<?php if(isset($row['email'])) echo $row['email']; ?>"/>
</div>
<div id="f">
<label for="title" class="pf3">عنوان</label>
<input class="input" type="text" name="title" id="title" placeholder="عنوان پیشنهاد" value="<?php if(isset($row['title'])) echo $row['title']; ?>"/>
</div>
<div id="f">
<p class="pf4">پیشنهادات</p>
<textarea class="input1" name="body" id="body" rows="20" cols="60"/ value="<?php if(isset($row['body'])) echo $row['body']; ?>"></textarea>
<br>
<span class = "form-text">نظرات و پیشنهادات خود را در اختیار ما بگذارید</span>
</div>
<div id="f">
<input class="input2" type="submit" name = "submit" value="حذف" > 
</div>
</form>
</main>
 <footer>
 <p class="pf">*تمامی حقوق این سایت محفوظ است علی میرمحمدصادقی*</p>
 </footer>
 </body>
</html>