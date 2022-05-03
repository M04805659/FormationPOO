<?php

namespace App;

use App\Exceptions\UserException;
use App\Exceptions\UserIsBanException;
use App\Exceptions\UserNotVerifiedException;

class Login
{
	protected $user;
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function login(): bool
 	{
 		if(!$this->user->isVerified()) {
 			throw UserException::notVerifed();
 		}

		return true;
	}

}