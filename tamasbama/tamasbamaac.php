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
<link   href="../css/style.css"   rel="stylesheet"   type="text/css">
	<link media = "screen AND (max-width:991px)" rel = "stylesheet" href = "../css/mobile.css">
	<link rel = "stylesheet" href = "../css/responsiveNav.css">
</head>

	<body class="body">
	<header>



     
	<nav id = "mainNav">
		<ul>
  <li> <a href="../index.html">خانه</a> </li>
  <li> <a href="#">محصولات</a> </li>
  <li  class = "active"> <a href="../tamasbama/tamasbama.html">تماس با ما</a> </li>
  <li> <a href="#">درباره ما </a> </li>
    </ul>
 
    </nav>
     <div>
        <ul  id="left">
    <li> <a href="#">ناحیه کاربری</a> </li>
  </ul>
  </div>
     <div>
     <img class="icon" src="../icon/2.png"/>
  </div>
</header>

<main>
<h1>تماس با ما</h1>

<form  class="form" action = "tamasbamaac.php" method = "POST">
<div id="f">
<label for="name" class="pf2">نام کاربری</label>
<input class="input" type="text" id="user" name="user" placeholder="نام کاربری"/> 
</div>
<div id="f">
<label for="email" class="pf3">ایمیل</label>
<input class="input" type="text" name="email" id="email" placeholder="ایمیل خود را وارد کنید" />
</div>
<div id="f">
<label for="title" class="pf3">عنوان</label>
<input class="input" type="text" name="title" id="title" placeholder="عنوان پیشنهاد" />
</div>
<div id="f">
<p class="pf4">پیشنهادات</p>
<textarea class="input1" name="message" id="message" rows="20" cols="60"/></textarea>
<br>
<span class = "form-text">نظرات و پیشنهادات خود را در اختیار ما بگذارید</span>
</div>
<div id="f">
<input class="input2" type="submit" value="ارسال" > 
</div>
</form>


<?php
include('setting.php');
$dbc = new mysqli($dbHost , $dbUser , $dbPass , $dbName); 

$sql = "INSERT INTO messages(name,email,title,body)
		VALUES('{$_POST['user']}', '{$_POST['email']}', '{$_POST['title']}', '{$_POST['message']}')";

$result = $dbc -> query( $sql ); 

$dbc -> close(); 


echo "<p  class='pecho'>پیام شما با موفقیت ثبت شد</p>";

?>
</main>
 <footer>
 <p class="pf">*تمامی حقوق این سایت محفوظ است علی میرمحمدصادقی*</p>
 </footer>
 </body>
</html>
