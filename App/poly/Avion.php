<?php

namespace App\poly;

class Avion extends Vehicule
{

	private $type;
	private $heure_vole;
	public function __construct($array)
	{
		parent::__construct($array['marque'], $array['date_achat'], $array['prix_achat']);
		$this->type = $array['type'];
		$this->heure_vole = $array['heure_vole'];
	}


}
