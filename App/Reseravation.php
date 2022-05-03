<?php

namespace App;


class Reseravation {

	private static  ?self $_instance = null;
	private function __construct()
	{
		echo 'Nouvelle instance!';
	}

	public static function getInstance(): self
	{
		if(is_null(self::$_instance)) {
			self::$_instance = new self;
		}

		return self::$_instance;
	}

}