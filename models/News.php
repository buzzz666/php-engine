<?php

/**
* 
*/
class News
{
	//Returns single news item with specified id
	public static function getNewsItemById($id){
		$id = intval($id);

		if ($id){

			$db = Db::getConnection();

			$result = $db -> query('SELECT * from news WHERE id='.$id);

			$newsItem = $result->fetch(PDO::FETCH_ASSOC);

			return $newsItem;
		}
	}

	//returns 10 last publication
	public static function getNewsList(){

		$db = Db::getConnection();

		$newsList = array();

		$result = $db -> query('SELECT id, title, date, short_content, image '
							  .'FROM news '
							  .'ORDER BY date DESC '
							  .'LIMIT 10');

		$i = 0;
		while($row = $result -> fetch(PDO::FETCH_ASSOC)) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$newsList[$i]['image'] = $row['image'];
			$i++;
		}

		return $newsList;
	}
}

?>