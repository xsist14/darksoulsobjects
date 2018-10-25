<?php

	// require ("player.php");

	// $jason = new Player();
	
	// echo "here is the health points before initializing: " . $jason->healthPoints;
	
	// $jason->healthPoints = 100;
	
	// echo "<br />";
	// echo "health before damage: " . $jason->healthPoints;
	// echo "<br />";
	// echo "health after damage: " . $jason->setRandomDamage();
/////////////////
	$items = 
	[
		"Estus Flask" => true,
		"Sword" => true,
		"Torch" => true,
		"Souls" => 1,
	];

	function removeEstus($items) {
		$items["Estus Flask"] = false;

		return $items;
	}

	function giveEstus($items) {
		$items["Estus Flask"] = true;

		return $items;
	}



		// $playerHasItem = "Estus Flask";
	function printKey($playerHasItem, $items) {
		foreach ($items as $item => $value) 
		{
			if ($item == $playerHasItem && $value == true) 
			{
				echo "You have the {$playerHasItem}!<br />";
			} 
			elseif ($item == $playerHasItem && $value == false)
			{
				echo "You don't have the {$playerHasItem}<br />";
			}
		}
	}

	$items = removeEstus($items);
	$items = giveEstus($items);

	printKey("Estus Flask", $items);
	// checkForEstus();



?>