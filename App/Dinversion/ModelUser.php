<?php

namespace App\Dinversion;

class ModelUser
{
	private DBConnectorInterface $db;
	public function __construct(DBConnectorInterface $db)
	{
		$this->db = $db;
	}

	public function update()
	{
		return $this->db->connect();
	}

}