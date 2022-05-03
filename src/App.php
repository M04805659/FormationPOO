<?php

namespace Src;

class App
{

	private $router;
	private $request;

	public function __construct($router, $request)
	{
		$this->router = $router;
		$this->request = $request;
	}

	public function run()
	{
		try {
			echo $this->router->resolve($this->request['uri'],$this->request['method'] );
		} catch (\Exceptions\RouteNotFoundException $e) {
			echo $e->getMessage();
		}
	}

}