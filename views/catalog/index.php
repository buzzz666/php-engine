<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
	<div class="container">
		<div class="row">
			
			<?php include ROOT . '/views/layout/aside.php' ?>

			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Последние товары</h2>
					
					<?php foreach ($latestProducts as $productItem): ?>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="/template/images/home/product1.jpg" alt="" />
										<h2>$<?php echo $productItem['price'] ?></h2>
										<p>
											<a href="/product/<?php echo $productItem['id'] ?>">
												<?php echo $productItem['name'] ?>
											</a>											
										</p>
										<a href="#" data-id="<?php echo $productItem['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
									</div>
									<?php if ($productItem['is_new']): ?>
										<img src="/template/images/home/new.png" alt="new" class="new">
									<?php endif; ?>
								</div>
							</div>
						</div>

					<?php endforeach; ?>	

				</div><!--features_items-->

				<?php include ROOT . '/views/layout/recommended.php' ?>

			</div>
		</div>
	</div>
</section>

<?php include ROOT . '/views/layout/footer.php' ?>