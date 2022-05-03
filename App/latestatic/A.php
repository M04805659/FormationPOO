<?php

namespace App\latestatic;

class A
{
	private function foo() {
		echo __CLASS__;
	}

	public  function test() {
		$this->foo();
		static::foo();
	}

}
