<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
	<div class="container">
		<div class="row">

			<?php include ROOT . '/views/layout/aside.php' ?>

			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Корзина</h2>
					
					<?php if ($productsInCart): ?>
						<p>Товары в корзине:</p>
						<table class="table-bordered table-striped table cart-table">
							<tr>
								<th>Код товара</th>
								<th>Название</th>
								<th>Стоимость, $</th>
								<th>Колличество, шт</th>
								<th>Удалить</th>
							</tr>
							<?php foreach($products as $product): ?>
								<tr>
									<td><?php echo $product['code']; ?></td>
									<td>
										<a href="/product/<?php echo $product['id']; ?>">
											<?php echo $product['name']; ?>
										</a>	
									</td>
									<td><?php echo $product['price']; ?></td>
									<td><?php echo $productsInCart[$product['id']]; ?></td>
									<td>
										<a href="/cart/delete/<?= $product['id']; ?>" class="delete-button">
											<i class="fa fa-times fa-lg delete-button"></i>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
							<tr>
								<td colspan="3">Общая стоимость:</td>
								<td><?php echo $totalPrice; ?></td>
							</tr>
						</table>
						<a href="/cart/checkout" class="btn btn-default default-button">Оформить заказ</a>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>


<?php include ROOT . '/views/layout/footer.php' ?>