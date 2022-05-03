<?php

namespace App;

class PDFDownloadService {

		public function downloadPDF(PDFDownloder $PDFDownloder) {
			return $PDFDownloder->downloderPDF();
		}
}