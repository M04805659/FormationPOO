<?php

namespace Controllers;

use Models\User;
use Src\Render;

class UserController
{
	public function show(string $username = null): string
	{
		$username = $this->checkUsername($username);
		return 'Profil de ' . $username;
	}

	private function checkUsername(?string $username): string
	{
		if(is_null($username)) {
			$username = 'Visiteur';
		}

		return $username;
	}
}