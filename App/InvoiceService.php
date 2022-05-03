<?php

namespace App;

use App\contracts\PDFFormatterInterface;
use App\Service\EmailService;
use App\Service\PDFFormatter;
use App\Service\TaxCalculator;

class InvoiceService
{
	private $formatterPdf;
	private $calculatorTax;
	private $serviceEmail;
	public function __construct(
			TaxCalculator  $calculatorTax,
			PDFFormatter $formatterPdf,
			EmailService $serviceEmail
	)
	{
		$this->formatterPdf = $formatterPdf;
		$this->calculatorTax = $calculatorTax;
		$this->serviceEmail = $serviceEmail;
	}

	public function generate($price)
	{
		// calcul de taxe
		$calculatorTax = $this->calculatorTax->calculate($price);
		echo $calculatorTax;
		// Génerer PDF

		$formatterPdf = $this->formatterPdf->render();
		echo '<br />';
		echo $formatterPdf;
		//Envoyer un email
		$serviceEmail = $this->serviceEmail->send();
		echo '<br />';
		echo $serviceEmail;

	}
}
