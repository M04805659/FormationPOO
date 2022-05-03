<?php

namespace App\contracts;

interface PaymentInterface
{

	public function process(float $price): string;

}