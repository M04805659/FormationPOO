<?php

namespace App;

use App\Traits\Mailable;

class Invoice {

	use Mailable;
	public function download()
	{
		return 'Download';
	}

}