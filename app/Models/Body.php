<?php
namespace App\Models;

use App\Traits\Organs\Battery;
use App\Traits\Organs\SolarPanel;

class Body {
	use Battery, SolarPanel;
	
	private $temperature = 50;
	
	
}