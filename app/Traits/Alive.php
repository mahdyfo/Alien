<?php
namespace App\Traits;

trait Alive {
	protected $energy = 0;
	
	public function eat($units = 1) {
		$this->energy += $units / 10;
	}
	
	
	
	public function die() {
		$this->energy = 0;
	}
}