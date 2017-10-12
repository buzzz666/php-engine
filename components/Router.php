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

	//returns request string
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		//getting request path
		$uri = $this->getURI();

		//checking existence in routes.php
		foreach ($this->routes as $uriPattern => $path) {
			if (preg_match("~$uriPattern~", $uri)){

				//getting internal adress using rules
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				//determinate controller, action, args
				$segments = explode('/', $internalRoute);

				$controllerName = ucfirst(array_shift($segments).'Controller');
				$actionName = 'action'.ucfirst(array_shift($segments));

				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
				if (file_exists($controllerFile)){
					include_once($controllerFile);
				}				

				$parameters = $segments;

				//echo $controllerName."<br>".$actionName."<br>";

				//print_r($parameters);

				//creating object, calling selected method
				$controllerObject = new $controllerName;
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				if($result != null){
					break;
				}

				die;

			}
		}
		

		/*foreach ($this->routes as $uriPattern => $path){
			
			//comp $uriPattern and $uri
			if (preg_match("~$uriPattern~", $uri)){
				//getting action & controller name
				$segments = explode('/', $path);

				$controllerName = ucfirst(array_shift($segments).'Controller');
				$actionName = 'action'.ucfirst(array_shift($segments));
				//echo $controllerName;
				//echo $actionName;
				
				//including actual class-controller file
				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

				if (file_exists($controllerFile)){
					include_once($controllerFile);
				}

				//creating object, calling selected method
				$controllerObject = new $controllerName;
				$result = $controllerObject->$actionName();
				if($result != null){
					break;
				}
				
			}
		}*/
	}
}

?>