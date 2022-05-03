<?php

namespace App;

class User
{
	public $username;
	public $password;

	public function __construct( string $username, string $password)
	{
		$this->username = $username;
		$this->password = $password;
	}

	public function isVerified(): bool
	{
		return false;
	}

	public function isBan(): bool
	{
		return false;
	}
}