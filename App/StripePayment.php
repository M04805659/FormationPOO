<?php

namespace App;

use App\contracts\PaymentInterface;

class StripePayment implements PaymentInterface
{
	public function process(float $price): string
	{
		$price = $price + $price * 0.03;
		return 'Prix à payer avec Stripe : ' . $price . '$';
	}
}
