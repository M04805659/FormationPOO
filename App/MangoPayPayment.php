<?php

namespace App;

use App\contracts\PaymentInterface;

class MangoPayPayment implements PaymentInterface
{
	public function process(float $price): string
	{
		$price = $price + $price * 0.05;
		return 'Prix à payer avec Mongo Pay : ' . $price . '$';
	}
}
