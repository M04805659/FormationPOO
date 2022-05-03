<?php

namespace App\pattern;


class Singleton
{

	private static $instance = null;

	private function __construct()
	{
	}

	public static function getInstance()
	{
		var_dump(self::class); exit;
		if(self::$instance === null) {
			self::$instance = new static();
		}

		return self::$instance;

	}

}