<?php include ROOT . '/views/layout/header_admin.php' ?>

<section class="admin-height">
	<div class="container">
		<div class="row">

			<?php include ROOT . '/views/layout/aside_admin.php' ?>

			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Панель администратора</h2>
					<h4 class="text-center">Здравствуйте, <?php echo $user['name']; ?>!</h3>
				</div>
			</div>
		</div> 
	</div>
</section>


<?php include ROOT . '/views/layout/footer_admin.php' ?>