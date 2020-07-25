<?php
namespace App\Traits\Organs;

trait Battery {
	private $energy = 100;
	
	public function incrementEnergy($amount = 1) {
		$this->energy = min($this->energy + $amount, 100);
		if($this->energy < 100){
			// Increase joy by amount or if energy = 98 and amount is 5, increase joy by 2
			$this->incrementJoy($amount < 100 - $this->energy ? $amount : 100 - $this->energy);
		}
	}
	
	public function decrementEnergy($amount = 1) {
		$this->energy = max($this->energy - $amount, 0);
		$this->decrementJoy($amount);
	}
	
}