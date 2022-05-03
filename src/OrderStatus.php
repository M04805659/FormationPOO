<?php

namespace Src;

class OrderStatus
{
	public const DELIVRED = 1;
	public const CANCELED = 2;
	public  const PROCESSING = 3;

	public static function all(): array
	{
		return [
			self::DELIVRED,
			self::CANCELED,
			self::PROCESSING
		];
	}
}
