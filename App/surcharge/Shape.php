<?php

namespace App\surcharge;

class Shape
{
	function __call($name, $arguments)
	{
		if($name == 'area') {
			switch (count($arguments)) {

				case 1:
					 return 3.14 * $arguments[0];
				case 2:
					return $arguments[0] * $arguments[1];
			}
		}
	}


}