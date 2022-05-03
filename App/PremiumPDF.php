<?php

namespace App;

class PremiumPDF implements PDFDownloder {

	public function downloderPDF(?int $size = null): string
	{
		return 'PDF Téléchargé (Premium)';
	}
}