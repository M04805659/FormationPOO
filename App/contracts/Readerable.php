<?php

namespace App\contracts;

interface Readerable
{
	public function read(string $fileType): string;
}