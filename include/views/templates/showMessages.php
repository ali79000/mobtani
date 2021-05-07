<section>
		<article>
			<section>
				<h4>
					<a href = '#?id=<?php echo $id; ?>' class = 'atmp'>
						نام کاربری: <?php echo $name; ?>
					</a>
				</h4>
				<section>
					<p>
					ایمیل: <?php echo $email; ?><br>
					عنوان پیام: <?php echo $title; ?><br>
						متن پیام: <?php echo $body; ?><br>
					</p>
				</section>
			</section>
				<span>
					<a href = 'editTamasbama.php?id=<?php echo $id;?>' class = 'b1'>ویرایش</a>
					<a href = 'deleteTamasbama.php?id=<?php echo $id;?>' class = 'b2'>حذف</a>
				</span>
		</article>
	</section>