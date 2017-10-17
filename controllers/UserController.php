<?php 

class UserController
{
	
	public function actionRegister(){

		$name = '';
		$email = '';
		$password = '';

		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;

			if(!User::checkName($name)){
				$errors[] = 'Имя должно быть не короче 2-х символов';
			}

			if(!User::checkEmail($email)){
				$errors[] = 'Введите существующий email';
			}

			if(!User::checkPassword($password)){
				$errors[] = 'Пароль должен быть не короче 6-ти символов';
			}

			if (User::checkEmailExists($email)) {
				$errors[] = 'Taкой email уже зарегистрирован';
			}

			if ($errors == false) {
				$result = User::register($name, $email, $password);
			}

		}

		require_once(ROOT . '/views/user/register.php');

		return true;
	}
}

?>