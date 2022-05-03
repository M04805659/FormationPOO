<?php

namespace Controllers;


use App\contracts\PaymentInterface;
use App\PaypalPayment;
use App\StripePayment;

class PaymentController
{
	public function store(float $price, PaymentInterface $payment)
	{
		return $payment->process($price);
	}
}