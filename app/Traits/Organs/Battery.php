<?php
namespace App\Traits\Organs;

trait Battery {
	private $energy = 100;
	
	public function incrementEnergy($amount = 1) {
		$this->energy = min($this->energy + $amount, 100);
	}
	
	public function decrementEnergy($amount = 1) {
		$this->energy = max($this->energy - $amount, 0);
	}
	
}