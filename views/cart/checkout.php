<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
	<div class="container">
		<div class="row">

			<?php include ROOT . '/views/layout/aside.php' ?>

			<div class="col-sm-9 padding-right">
				<div class="features_items middle-pos"><!--features_items-->
					<h2 class="title text-center">Оформление заказа</h2>
					
					<?php if ($result): ?>

						<h5 class="margin-bottom">Заказ оформлен. Мы с Вами свяжемся в ближайшее время.</h5>
						<a href="/" class="btn btn-default default-button">На главную</a>

					<?php else: ?>
						<div class="col-sm-8 col-sm-offset-2">
							<h5>Выбрано товаров: <?= $totalQuantity; ?>, на сумму: $<?= $totalPrice; ?>.</h5>							
							<?php if (isset($errors) && is_array($errors)): ?>
								<?php foreach ($errors as $error): ?>
									<p><?= $error; ?></p>
								<?php endforeach; ?>
							<?php endif; ?>

							<h5 class="margin-bottom">Для оформления заказа заполните форму:</h5>

							<div class="signup-form">
								<form action="#" method="post">
									<p>Полное имя: </p>
									<input type="text" name="userName" placeholder="" value="<?= $userName; ?>">
									<p>Номер телефона в формате 380123456789: </p>
									<input type="text" name="userPhone" placeholder="" value="<?= $userPhone; ?>">
									<p>Комментарий к заказу: </p>
									<textarea class="margin-bottom" type="text" rows="10" name="userComment" placeholder=""><?= $userComment; ?></textarea>
									<button type="submit" name="submit" class="btn btn-default">Подтвердить заказ</button>
								</form>		
							</div>	
						</div>

					<?php endif ?>
					
				</div>
			</div>
		</div>
	</div>
</section>


<?php include ROOT . '/views/layout/footer.php' ?>