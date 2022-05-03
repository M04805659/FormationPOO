<?php
namespace Models;

use RuntimeException;
use Src\OrderStatus;

class Order extends Model
{

	public function withStatus(int $value): array
	{
		if(!in_array($value, OrderStatus::all())) {
			throw new RuntimeException('status inexistant');
		}
		return $this->where('status', $value);
	}
}
