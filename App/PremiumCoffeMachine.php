<?php

namespace App;

class PremiumCoffeMachine extends CoffeMachine {

	public function __construct(int $cups)
	{
		parent::__construct($cups);
	}

	public function select(string $selection)
	{
		switch ($selection) {
			case 'espresso':
				$this->makeEspresso();
				break;
			case 'vanilla':
				$this->makevanilla();
				break;
			default:
				break;

		}
	}

	protected function makevanilla() {
		for($i = 0; $i < $this->cups; $i++) {
			echo "Caffe Vanilla n {$i} servie !";
		}
	}
}