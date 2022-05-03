<?php
namespace App;

class CoffeMachine {

	protected int $cups;
	public function __construct(int $cups)
	{
		$this->cups = $cups;
	}

  	public function select(string $selection)
	{
		switch ($selection) {
			case 'espresso':
				$this->makeEspresso();
				break;
			default:
				break;

		}
	}

	protected function makeEspresso()
	{
		for($i = 0; $i < $this->cups; $i++) {
			echo "Caffe EspressoMachine n {$i} servie !";
		}
	}

}