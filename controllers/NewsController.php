<?php 

include_once (ROOT. '/models/News.php');

/**
* 
*/
class NewsController
{
	
	public function actionIndex()
	{
		echo "News articles list";\

		var_dump(News::getNewsList());
		$newsList = array();
		$newsList = News::getNewsList();

		var_dump($newsList);

		return true;
	}

	public function actionView($id)
	{
		if($id){
			echo "Single article<br>";
			$newsItem = News::getNewsItemById($id);

			echo $newsItem;
		}		

		return true;
	}
}

?>