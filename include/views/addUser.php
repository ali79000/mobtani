<?php
$main = '
			echo <<< EOT
			<h1>ثبت نام |<a href="#" class="a"> ورود</a></h1>
			<form action = "" method = "post" name = "registerForm" class="form">
				<label for="name" class="pf2">نام کاربری</label>
		
					<input class="input4" type="text" id="userr" name="userr" placeholder="نام کاربری خود را وارد کنید" value = "">
			<br><br>
				
				<label for = "email" class="pf5">ایمیل</label>
				<input type = "email" name = "emaill" id = "emaill" class="input4" required value = "" placeholder="ایمیل خود را وارد کیند"><br><br>
				
				<label for = "password" class="pf6">رمز عبور</label>
				
					<input type = "password" name = "password" id = "password" class="input4" required placeholder="رمز عبور خود را وارد کنید"><br><br>
					
				
			
				<label for="mobile" class="pf2">شماره همراه</label>			
				<input name = "mobile" id = "mobile" class="input4" required placeholder="شماره همراه خود را وارد کنید">
				<br><br><br>
				
				<input type = "submit" name = "submit" value = "ثبت نام" class= "input2">
				
			</form>
			EOT;
';


include 'templates/master.php';
?>