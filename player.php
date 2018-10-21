<?php

class Player {
	public $healthPoints = 0;
	public $damage;
	function getHealthPoints() 
	{
		return $this->healthPoints;		
	}

	function setRandomDamage() {
		$damage = rand(1,99);
		echo "here is the damage: " . $damage;
		echo "<br />";
		return ($this->healthPoints - $damage);
	}

	
}

?>