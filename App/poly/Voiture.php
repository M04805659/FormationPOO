<?php

namespace App\poly;

class Voiture extends Vehicule
{

	private $cylindre;
	private $km;
	public function __construct($array)
	{
		parent::__construct($array['marque'], $array['date_achat'], $array['prix_achat']);
		$this->cylindre = $array['cylindre'];
		$this->km = $array['km'];
	}


}
