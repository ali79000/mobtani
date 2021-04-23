	<section>
		<article>
			<img src = '<?php echo $args['imgSrc']; ?>'>
			<section>
				<h4>
					<a href = '#?id=<?php echo $args['id']; ?>'>
						نام دوره: <?php echo $args['name']; ?>
					</a>
				</h4>
				<section>
					<p>
						<span>قیمت:</span>
						<?php echo number_format( $args['price'] ); ?>  تومان<br>
						<span class = 'fw-bold'>توضیحات:</span>
						<?php echo  $args['description']; ?>
					</p>
					
				</section>
			</section>
	
				<span>
					<a href = 'editProduct.php?id=<?php echo $args['id'];?>' class = 'b1'>ویرایش</a>
					<a href = 'deleteProduct.php?id=<?php echo $args['id'];?>' class = 'b2'>حذف</a>
				</span>
	
		</article>
	</section>