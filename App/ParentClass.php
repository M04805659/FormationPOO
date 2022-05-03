<?php

namespace App;

class ParentClass {

	protected static  string $name = 'ParentClass';

	public function getName(): string
	{
		return static::$name;
	}

	public function factory()
	{
		return new static();
	}
}