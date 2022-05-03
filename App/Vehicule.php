<?php

namespace App;

abstract class Vehicule {

	protected string $marque;
	public function __construct($marque)
	{
		$this->marque = $marque;
	}

	abstract public function marque(): string;

}