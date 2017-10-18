<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">Регистрация</h2>
				<?php if (isset($result)): ?>
					<h2>Вы зарегистрированы!</h2>
				<?php else: ?>
					<?php 
						if(isset($errors)){
							foreach ($errors as $error) {
								echo '<p>' . $error . '</p>';
							}
						}
					?>
					<div class="signup-form" style="margin-bottom: 30px;">
						<form action="#" method="post">
							<input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>">
							<input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
							<input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
							<button type="submit" name="submit" class="btn btn-default">Отправить</button>
						</form>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php include ROOT . '/views/layout/footer.php' ?>