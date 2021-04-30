<?php
echo "
		<article>
			<h2>
				نام محصول: {$name}
			</h2>
			<img src = '{$imgSrc}'>
			<h3>مشخصات</h3>
			<p>
				<span>قیمت: </span>";
			echo number_format( $price ); 
			echo"			تومان<br>
				<span>توضیحات:</span>";
				if( ! empty( $description ) ) echo $description;
				else echo '---';
				echo "
			</p>
			<hr>
			<section>
				<span>
						<a href = 'editProduct.php?id={$id}' class = 'b1'>ویرایش</a>
						<a href = 'deleteProduct.php?id={$id}' class = 'b2'>حذف</a>
				</span>
                		</article>
			</section>";
?>