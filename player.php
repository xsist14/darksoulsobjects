<?php

class Player {
	public $healthPoints = 0;
	public $damage;

	// public $playerItems = 
	// [
	// 	"estus flask" => 20,
	// ];
	
	// Getters

	function getHealthPoints() 
	{
		return $this->healthPoints;		
	}

	function getEstusFlaskHealthBoost()
	{

	}
	// Setters

	function setRandomDamage() {
		$damage = rand(1,99);
		echo "here is the damage: " . $damage;
		echo "<br />";
		return ($this->healthPoints - $damage);
	}


}

?>