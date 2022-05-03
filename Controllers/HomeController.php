<?php

namespace Controllers;

use Models\User;
use Src\Render;

class HomeController
{
	public function index(): Render
	{
		$users = (new User())->all();
		return Render::make('home/index', compact('users'));
	}
}