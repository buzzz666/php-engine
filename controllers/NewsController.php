<?php 

include_once (ROOT. '/models/News.php');

/**
* 
*/
class NewsController
{
	
	public function actionIndex()
	{
		echo "News articles list";

		$newsList = array();
		$newsList = News::getNewsList();

		require_once(ROOT . '/views/news/index.php');

		return true;
	}

	public function actionView($id)
	{
		if($id){
			echo "Single article<br>";
			
			$newsItem = News::getNewsItemById($id);

			require_once(ROOT . '/views/news/article.php');

			return true;
		}		

		return true;
	}
}

?>