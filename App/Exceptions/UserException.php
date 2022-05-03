<?php

namespace App\Exceptions;

class UserException extends \Exception
{
	public static function notVerifed()
	{
		return new static("utilisateur non vérifié si Alaedinne");
	}

}