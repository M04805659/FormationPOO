<?php

namespace App;

use App\contracts\PaymentInterface;

class PaypalPayment implements PaymentInterface
{
	public function process(float $price): string
	{
		$price = $price + $price * 0.01;
		return 'Prix à payer avec Paypal : ' . $price . '$';
	}
}
