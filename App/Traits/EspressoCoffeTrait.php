<?php
 namespace App\Traits;

 trait EspressoCoffeTrait {

	 private float $temperature = 25.2;
	 public function makeEspresso(): string
	 {
		 return static::class. ' Fait un EspressoMachine ' . $this->temperature;
	 }
 }
