<?php

namespace App\contracts;

interface PDFFormatterInterface
{
	public function render(): string;
}
