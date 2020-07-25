<?php
namespace App\Traits;

trait Alive {
	private $joy = 0; // -100 to +100
	
	public function eat($calorie = 1) {
		$this->incrementEnergy($calorie);
	}
	
	public function cry() {
		$this->decrementEnergy(1);
		$this->decrementJoy(15);
	}
	
	public function die() {
		$this->decrementEnergy(100);
	}
	
	public function incrementJoy($amount = 1) {
		$this->joy = min($this->joy + $amount, 100);
	}
	
	public function decrementJoy($amount = 1) {
		$this->joy = max($this->joy - $amount, -100);
	}
	
}