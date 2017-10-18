<?php include ROOT . '/views/layout/header.php' ?>

<section class="full-height">
	<div class="container">
		<div class="row">
			
			<?php include ROOT . '/views/layout/aside.php' ?>

			<div class="col-sm-8">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Обратная связь</h2>

					<div class="col-sm-6 col-sm-offset-3 padding-right text-center">
						<?php if ($result): ?>
							<div class="signup-form">
								<h4>Сообщение отправлено!</h4> 
								<h4>Мы ответим вам в ближайшее время.</h4>
								<a href="/cabinet/" class="btn btn-default add-to-cart">Назад в кабинет</a>
							</div>
						<?php else: ?>
							<h5>Есть вопрос? Напишите нам:</h5>
							<?php 
								if (isset($errors)) {
									echo '<p>' . $errors . '</p>';
								}	
							?>
							<div class="signup-form">
								<form action="#" method="post">
									<p>Ваша почта: </p>
									<input type="text" name="userEmail" placeholder="E-mail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>">
									<p>Сообщение: </p>
									<textarea type="text" rows="10" name="userText" placeholder="Сообщение" style="margin-bottom: 10px;"><?php if(isset($_POST['userText'])) echo $_POST['userText']; ?></textarea>
									<button type="submit" name="submit" class="btn btn-default">Отправить</button>
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