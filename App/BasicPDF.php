<?php

namespace App;

class BasicPDF implements PDFDownloder {


	public function downloderPDF(int $size = null): string
	{
		return 'PDF téléchargé (Basic) ' . $size ;
	}

//	public function downloadHTML(): string
//	{
//		return 'HTML Telechargé basic';
//	}
	public function downloadHTML(): string
	{
		return 'HTML Telechargé basic';
	}

}