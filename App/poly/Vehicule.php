<?php

namespace App\poly;

class Vehicule
{

	protected $marque;
	protected $date_achat;
	protected $prix_achat;

	public function __construct($marque, $date_achat, $prix_achat)
	{
		$this->marque = $marque;
		$this->date_achat = $date_achat;
		$this->prix_achat = $prix_achat;
	}

}