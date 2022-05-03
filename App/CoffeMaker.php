<?php

namespace App;

abstract class CoffeMaker {

	public function makeCoffe()
	{
		return static::class . ' fait un café';
	}

}