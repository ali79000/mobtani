<section>
		<article>
			<section>
				<h4>
					<a href = '#?id=<?php echo $args['id']; ?>'>
						نام کاربری: <?php echo $args['userr']; ?>
					</a>
				</h4>
				<section>
					<p>
					رمز عبور: <?php echo $args['pass']; ?><br>
					ایمیل: <?php echo $args['emaill']; ?><br>
						شماره همراه: <?php echo $args['mobile']; ?><br>
					</p>
				</section>
			</section>
				<span>
					<a href = 'editUser.php?id=<?php echo $args['id'];?>' class = 'b1'>ویرایش</a>
					<a href = 'deleteUser.php?id=<?php echo $args['id'];?>' class = 'b2'>حذف</a>
				</span>
		</article>
	</section>