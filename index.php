<?php 

//front controller



//settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

//including 

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

//db



//router

$router = new Router();
$router->run();

?>