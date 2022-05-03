<?php

namespace App\ISegration;

class PaymentWorkflow implements WorkFlowInformationsInterface, WorkFlowPaymentInterface
{

	public function renderInformation(): string
	{
		return 'Traitement des informations ....';
	}

	public function processPayment()
	{
		return 'Traitement du paiment WorkFlow';
	}
}