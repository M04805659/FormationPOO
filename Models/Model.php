<?php

namespace Models;

use Src\Constants;

class Model
{
	private static \PDO $pdo;
	protected string $table;

	public function __construct()
	{
		try {
			$dsn = 'mysql:dbname='.Constants::DB_NAME.';host='. Constants::DB_HOST;
			$user = Constants::DB_USERNAME;
			$password = Constants::DB_PWD;
			static::$pdo = new \PDO($dsn, $user, $password,[
				\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
				\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
			]);
		} catch (\PDOException $e) {
			echo $e->getMessage(); die();
		}
		$this->table = strtolower(explode('\\',get_class($this))[1]). 's';
	}

	public function all(): array
	{
		$stmt = $this->getPDO()->query("select * from  {$this->table}");
		return $stmt->fetchAll();
	}


	public function where(string $column, int $value): array
	{
		$stmt = $this->getPDO()->prepare("SELECT * FROM {$this->table} WHERE {$column} = ?");
		$stmt->execute([$value]);
		return $stmt->fetchAll();
	}

	private function getPDO(): \PDO
	{
		return static::$pdo;
	}
}