<?php

namespace App\Liskov;

use App\contracts\Readerable;

class ParentReadFile implements Readerable
{
	public function read(string $fileType): string
	{
		switch ($fileType) {
			case 'PDF':
				return $this->readPDF();
				break;
			default:
				throw new \Exception('Type de fichier inconnu');
		}
	}

	protected function readPDF(): string
	{
	 	return 'Lecture du PDF ....';
	}
}
