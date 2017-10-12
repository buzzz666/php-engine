<?php

/**
* 
*/
class News
{
	//Returns single news item with specified id
	public static function getNewsItemById($id){
		//db query
	}

	public static function getNewsList(){

		$host = 'localhost';
		$dbname = 'u447403917_phpen';
		$user = 'u447403917_root';
		$password = '159654';
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

		$newsList = array();

		$result = $db -> query('SELECT id, title, date, short_content '
							  .'FROM news '
							  .'ORDER BY date DESC '
							  .'LIMIT 10');

		$i = 0;
		while($row = $result -> fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}

		return $newsList;
	}
}

?>