<?php

namespace App\Liskov;

class ChildReadFile extends ParentReadFile
{
	public function read(string $fileType): string
	{
		switch ($fileType) {
			case 'PDF':
				return $this->readPDF();
				break;
			case 'HTML':
				return $this->readHTML();
				break;
			default:
				throw new \Exception('Type de fichier inconnu');
		}
	}

	public function readHTML(): string
	{
		return 'Lecture HTML ....';
	}
}