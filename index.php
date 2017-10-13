<?php 

//front controller

			/* DATE RESTRUCTURE
			$string = '23-03-2001';

			$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
			$replacement = 'Year $3, month $2, day $1';

			echo preg_replace($pattern, $replacement, $string);

			die;*/



//settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

//including 

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

//db



//router

$router = new Router();
$router->run();

?>