<section>
		<article>
			<section>
				<h4>
					<a href = '#?id=<?php echo $id; ?>' class = 'atmp'>
						نام کاربری: <?php echo $userr; ?>
					</a>
				</h4>
				<section>
					<p>
					رمز عبور: <?php echo $password; ?><br>
					ایمیل: <?php echo $emaill; ?><br>
						شماره همراه: <?php echo $mobile; ?><br>
					</p>
				</section>
			</section>
				<span>
					<a href = 'editUser.php?id=<?php echo $id;?>' class = 'b1'>ویرایش</a>
					<a href = 'deleteUser.php?id=<?php echo $id;?>' class = 'b2'>حذف</a>
				</span>
		</article>
	</section>