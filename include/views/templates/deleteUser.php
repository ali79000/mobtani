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
<h1>حذف کاربر</h1>

<form  class="form" action = "" method = "POST">
<div id="f">
<label for="name" class="pf2">نام کاربری</label>
<input class="input4" type="text" id="userr" name="userr" placeholder="نام کاربری خود را وارد کنید" value="<?php if(isset($row['userr'])) echo $row['userr']; ?>"/> 
</div>
<div id="f">
<label for="password" class="pf6">رمز عبور</label>
<input class="input4" type="password" name="pass" id="pass" placeholder="********" />
</div>
<div id="f">
<label for="email" class="pf5">ایمیل</label>
<input class="input4" type="email" name="emaill" id="emaill" placeholder="ایمیل خود را وارد کنید" value="<?php if(isset($row['emaill'])) echo $row['emaill']; ?>"/>
</div>
<div id="f">
<label for="mobile" class="pf2">شماره همراه</label>
<input class="input4" type="text" id="mobile" name="mobile" placeholder="شماره همراه" value="<?php if(isset($row['mobile'])) echo $row['mobile']; ?>"/> 
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