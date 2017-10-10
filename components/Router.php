<?php 

/**
* 
*/
class Router
{
	private $routes;
	
	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

	public function run()
	{
		//getting query string
		if (!empty($_SERVER['REQUEST_URI'])) {
			$uri = trim($_SERVER['REQUEST_URI'], '/php-start/php-engine/');
		}
		echo $uri;
	}
}

?>