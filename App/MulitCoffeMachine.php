<?php

namespace App;

use App\Traits\EspressoCoffeTrait;
use App\Traits\IrishCoffeTrait;

class MulitCoffeMachine extends CoffeMaker
{
	use IrishCoffeTrait;
	use EspressoCoffeTrait;

}