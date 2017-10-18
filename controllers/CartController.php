<?php 

class CartController
{
	
	//synchronized request
	/*public function actionAdd($id){
		
		Cart::addProduct($id);

		$referer = $_SERVER['HTTP_REFERER'];
		echo $_SERVER['HTTP_REFERER'];
		header("Location: $referer");
	}*/

	public function actionAddAjax($id){
		
		echo Cart::addProduct($id);

		return true;
	}

	public function actionIndex(){
		
		$categories = Category::getCategoriesList();

		$productsInCart = Cart::getProducts();

		if ($productsInCart) {
			$productsIds = array_keys($productsInCart);
			$products = Product::getProductsByIds($productsIds);

			$totalPrice = Cart::getTotalPrice($products);
		}

		require_once(ROOT . '/views/cart/index.php');

		return true;
	}
}

?>