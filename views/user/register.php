<?php include ROOT . '/views/layout/header.php' ?>

<section style="min-height: calc(100vh - 247px);">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4 padding-right">
			
			<?php if (isset($result)): ?>
				<h2>Вы зарегистрированы!</h2>
			<?php else: ?>
				<?php 
					foreach ($errors as $error) {
						echo '<p>' . $error . '</p>';
					}
				?>
				<div class="signup-form" style="margin-bottom: 30px;">
					<h2>Регистрация</h2>
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
</section>

<?php include ROOT . '/views/layout/footer.php' ?>