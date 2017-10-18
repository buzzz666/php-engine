<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-4 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">Вход на сайт</h2>
				<?php if (isset($errors) && is_array($errors)):
					foreach ($errors as $error) {
						echo '<p>' . $error . '</p>';
					}
				  endif; ?>	
				<div class="signup-form" style="margin-bottom: 30px;">
					<form action="#" method="post">
						<input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
						<input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
						<button type="submit" name="submit" class="btn btn-default">Отправить</button>
					</form>
				</div>
			</div>			
		</div>
	</div>
</section>

<?php include ROOT . '/views/layout/footer.php' ?>