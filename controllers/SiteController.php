<?php 

class SiteController
{
	
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProducts(9);

		require_once(ROOT . '/views/site/index.php');

		return true;
	}
}

?>