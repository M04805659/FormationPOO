<?php

namespace App\Service;

use App\contracts\PDFFormatterInterface;

class PremimumPDFFormatter implements  PDFFormatterInterface
{

	public function render(): string
	{
		return 'Premuim PDF .....';
	}
}
