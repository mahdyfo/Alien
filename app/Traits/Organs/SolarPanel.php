<?php
namespace App\Traits\Organs;

trait SolarPanel {
	private $solar_area = 400; //cm^2
	
	public function absorbEnergy() {
		$this->incrementEnergy($this->solar_area / 400);
	}
	
	
}