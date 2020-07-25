<?php
namespace App\Traits;

trait Alive {
	
	public function eat($calorie = 1) {
		$this->incrementEnergy($calorie);
	}
	
	public function cry() {
		$this->decrementEnergy(1);
	}
	
	public function die() {
		$this->decrementEnergy(100);
	}
	
}