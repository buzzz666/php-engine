<div class="col-sm-3">
	<div class="left-sidebar">
		<a href="/catalog/" class="catalog-aside">
			<h2>Каталог</h2>
		</a>
		<div class="panel-group category-products">
			<?php foreach ($categories as $categoryItem): ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title"><a href="/category/<?php echo $categoryItem['id'] ?>" class="<?php if($categoryId == $categoryItem['id']) echo 'active'; ?>"><?php echo $categoryItem['name'] ?></a></h4>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>