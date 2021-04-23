<section>
		<article>
			<section>
				<h4>
					<a href = '#?id=<?php echo $args['id']; ?>'>
						نام کاربری: <?php echo $args['name']; ?>
					</a>
				</h4>
				<section>
					<p>
					ایمیل: <?php echo $args['email']; ?><br>
					عنوان پیام: <?php echo $args['title']; ?><br>
						متن پیام: <?php echo $args['body']; ?><br>
					</p>
				</section>
			</section>
				<span>
					<a href = 'editTamasbama.php?id=<?php echo $args['id'];?>' class = 'b1'>ویرایش</a>
					<a href = 'deleteTamasbama.php?id=<?php echo $args['id'];?>' class = 'b2'>حذف</a>
				</span>
		</article>
	</section>