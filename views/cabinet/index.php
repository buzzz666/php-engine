<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
	<div class="container">
		<div class="row">

			<?php include ROOT . '/views/layout/aside.php' ?>

			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Личный кабинет</h2>
					<h3>Здравствуйте, <?php echo $user['name']; ?>!</h3>
					
					<a href="/cabinet/edit" class="btn btn-default default-button">Редактировать личные данные</a>
					<a href="/user/history" class="btn btn-default default-button">История покупок</a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include ROOT . '/views/layout/footer.php' ?>