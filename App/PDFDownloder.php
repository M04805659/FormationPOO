<?php

namespace App;

interface PDFDownloder  {

	public function downloderPDF(?int $size = null): string;


}