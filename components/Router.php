<?php

class Router
{

	private $routes;

	public function __construct()
	{
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = include($routesPath);
	}

	// Return type

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		// print_r($this->routes);

		$uri = $this->getURI();

		// проверить наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {

			// сравнение uriPattern и uri
			if (preg_match("~$uriPattern~", $uri)) {
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);


				$segments = explode('/', $internalRoute); // if go to /Books - [0] => Book [1] => list

				// echo "pattern $uriPattern<br>path $path<br>uri $uri<br>";
				// echo "internalRout - ";
				// print_r($internalRoute);
				// echo "<br>segments - ";
				// print_r($segments);

				$controllerName = array_shift($segments) . 'Controller'; //BookConroller
				$controllerName = ucfirst($controllerName); //upper case first, BookController


				$actionName = 'action' . ucfirst(array_shift($segments)); //actionList
				// echo "<br><br>$controllerName<br>$actionName";

				$parameters = $segments;

				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php'; //C:\OpenServer\domains\localhost/controllers/BookController.php
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				//создаем объект и вызываем action контроллера
				$controllerObject = new $controllerName;
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);

				if ($result != null) {
					break;
				}
			}
		}
	}
}