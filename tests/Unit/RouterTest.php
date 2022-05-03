<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Router\Router;

class RouterTest extends TestCase
{
	/** @test */
	public function it_registers_get_routes(): void
	{
		$router = new Router();
		$router->get('/', ['Controllers\HomeController', 'index']);
		$this->assertEquals(

		['GET' => ['/' => ['Controllers\HomeController', 'index']]],$router->getRoutes());
	}

	/** @test */
	public function it_registers_post_routes(): void
	{
		$router = new Router();
		$router->post('/', ['Controllers\HomeController', 'index']);
		$this->assertEquals(

			['POST' => ['/' => ['Controllers\HomeController', 'index']]],$router->getRoutes());
	}

	/** @test */
	public function it_doesnt_have_any_route_before_registering_route()
	{
		$router = new Router();
		$this->assertEmpty($router->getRoutes());
	}

}
