<?php

namespace App\Service;

class TaxCalculator
{
	public function calculate($price)
	{
		return $price*1.4;
	}
}
