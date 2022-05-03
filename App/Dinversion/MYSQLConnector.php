<?php

namespace App\Dinversion;

class MYSQLConnector implements DBConnectorInterface
{
	public function connect()
	{
		return 'MuSQL';
	}

}