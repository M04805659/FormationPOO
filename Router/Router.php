<?php

namespace Router;

use Exceptions\RouteNotFoundException;

class Router
{
	private array $routes = [];

	public function get(string $path, $action): void
	{
		$this->register($path, $action, 'GET');
	}

	public function post(string $path, $action): void
	{
		$this->register($path, $action, 'POST');
	}

	public function register(string $path, $action, string $HTTPVerb): void
	{
		$this->routes[$HTTPVerb][$path] = $action;
	}

	public function resolve(string $uri, string $requestMethod) {

		$path = explode('?', $uri)[0];

		$action = $this->routes[$requestMethod][$path] ?? null;

		if($action instanceof \Closure) {
			return $action();
		}

		if(is_array($action)) {
			 [$className, $method] = $action;

			 if(class_exists($className) && method_exists($className, $method)) {
			 	$class = new $className();
			 	return call_user_func_array([$class, $method], []);
			 }
		}

		throw new RouteNotFoundException();
	}

	public function getRoutes(): array
	{
		return $this->routes;
	}

}
