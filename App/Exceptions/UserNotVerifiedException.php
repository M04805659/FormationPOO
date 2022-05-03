<?php

namespace App\Exceptions;


class UserNotVerifiedException extends \Exception
{
	protected $message = "Utilisateur non vérifié";

}