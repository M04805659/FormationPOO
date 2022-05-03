<?php

namespace App\Exceptions;


class UserIsBanException extends \Exception
{
	protected $message = "Utilisateur banni";

}