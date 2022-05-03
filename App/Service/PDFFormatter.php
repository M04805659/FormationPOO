<?php

namespace App\Service;

use App\contracts\PDFFormatterInterface;

class PDFFormatter implements PDFFormatterInterface
{
	public function render(): string
	{
		return 'PDF .....';
	}
}
