<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
	<div class="container">
		<div class="row">
			
			<?php include ROOT . '/views/layout/aside.php' ?>

			<div class="col-sm-8">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Редактирование личных данных</h2>

					<div class="col-sm-6 col-sm-offset-3 padding-right text-center">
						<?php if (isset($result)): ?>
							<div class="signup-form">
								<h4>Данные отредактированы</h4>
								<a href="/cabinet/" class="btn btn-default default-button">Назад в кабинет</a>
							</div>
						<?php else: ?>
							<?php 
								if(isset($errors)){
									foreach ($errors as $error) {
										echo '<p>' . $error . '</p>';
									}
								}
							?>
							<div class="col-sm-10 col-sm-offset-1 signup-form" style="margin-bottom: 30px;">
								<form action="#" method="post">
									<p>Имя: </p>
									<input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>">
									<p>Пароль: </p>
									<input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
									<button type="submit" name="submit" class="btn btn-default">Сохранить</button>
								</form>
							</div>
						<?php endif; ?>
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php include ROOT . '/views/layout/footer.php' ?>