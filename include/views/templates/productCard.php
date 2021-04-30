	<section>
		<article>
			<img src = '<?php echo $imgSrc; ?>'>
			<section>
				<h4>
					<a href = 'productDetails.php?id=<?php echo $id; ?>' class = 'atmp'>
						نام محصول: <?php echo $name; ?>
					</a>
				</h4>
				<section>
					<p>
						<span>قیمت:</span>
						<?php echo number_format( $price ); ?>  تومان<br>
						<span>توضیحات:</span>
						<?php echo  $description; ?>
					</p>
					
				</section>
			</section>
	
				<span>
					<a href = 'editProduct.php?id=<?php echo $id;?>' class = 'b1'>ویرایش</a>
					<a href = 'deleteProduct.php?id=<?php echo $id;?>' class = 'b2'>حذف</a>
				</span>
	
		</article>
	</section>