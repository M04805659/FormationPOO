<?php

namespace Controllers;

use Models\Order;
use Src\OrderStatus;
use Src\Render;

class OrderController
{
	public function index(): Render
	{
		$orders = (new Order())->withStatus(OrderStatus::DELIVRED);
		return Render::make('orders/index', compact('orders'));
	}
}