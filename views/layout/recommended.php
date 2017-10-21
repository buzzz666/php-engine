<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">Рекомендуемые товары</h2>

	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">

				<?php $counter = 1; $closedFlag = false; ?>
				<?php foreach ($relatedProducts as $product): ?>
					<?php if ($counter%3 == 1 && $counter != 1): ?>
			<div class="item">
					<?php endif ?>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?= Product::getImage($product['id']); ?>" alt="" />
									<h2>$<?= $product['price']; ?></h2>
									<p>
										<a href="/product/<?= $product['id']; ?>">
											<?= $product['name']; ?>
										</a>											
									</p>
									<a href="#"  data-id="<?= $product['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
								</div>
								<?php if ($product['is_new']): ?>
									<img src="/template/images/home/new.png" alt="new" class="new">
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php $closedFlag = false ?>
					<?php if ($counter%3 == 0): ?>
			</div>
						<?php $closedFlag = true ?>
					<?php endif; ?>
					<?php $counter++; ?>
				<?php endforeach ?>
			<?php if (!$closedFlag): ?>
			</div>
			<?php endif; ?>
		</div>
		<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>			
	</div>
</div><!--/recommended_items-->