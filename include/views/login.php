<?php
$main = '
			echo <<< EOT
			<h1>ورود |<a href="addUser.php" class="a"> ثبت نام</a></h1>
		
			<form action = "" method = "post" name = "loginForm" class="form" >
						<div id="f">
				<label for = "email" class="pf6">ایمیل</label>
				<input type = "email" name = "emaill" id = "emaill" class="input4" required value = "
			EOT;
			if( isset($emaill) ) echo $emaill;
			echo <<< EOT
			">
				</div>
				<label for = "password" class="pf2">کلمه عبور</label>
		
					<input type = "password" name = "password" id = "password" class="input4" required>
					<div id="f">
				<br>
				<input type = "submit" name = "submit" value = "ورود" class= "input2">
			</div>
			</form>
			EOT;
';
include 'templates/master.php';
?>