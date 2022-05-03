<?php

namespace App;

class Renault extends Vehicule {


	public function marque(): string
	{
		return 'Je suis un vehicule français et je suis une  ' . $this->marque . '.';
	}
}