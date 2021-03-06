<?php 

class SiteController
{
	
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProducts(9);

		$relatedProducts = array();
		$relatedProducts = Product::getRelatedProducts();

		require_once(ROOT . '/views/site/index.php');

		return true;
	}

	public function actionContact()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$userEmail = '';
		$userText = '';
		$result = false;

		if (isset($_POST['submit'])) {
			$userEmail = $_POST['userEmail'];
			$userText = $_POST['userText'];

			$errors = false;

			if(!User::checkEmail($userEmail)){
				$errors = 'Введите существующий E-mail';
			}

			if ($errors == false) {
				$adminInfo = include(ROOT . '/config/admin_info.php');

				$adminEmail = $adminInfo['email'];
				$message = "Текст письма:\n {$userText}. \nОт {$userEmail}";
				$subject = '';
				$result = mail($adminEmail, $subject, $message);
				$result = true;
			}
		}

		require_once(ROOT . '/views/site/contact.php');

		die;
	}
}

?>