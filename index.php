<?php

	// require ("player.php");

	// $jason = new Player();
	
	// echo "here is the health points before initializing: " . $jason->healthPoints;
	
	// $jason->healthPoints = 100;
	
	// echo "<br />";
	// echo "health before damage: " . $jason->healthPoints;
	// echo "<br />";
	// echo "health after damage: " . $jason->setRandomDamage();


	$items = 
	[
		"Estus Flask" => true,
		"Sword" => true,
		"Torch" => true,
		"Souls" => 1,
	];

	echo $items[$key];
	
	$playerHasItem = "Estus Flask";
	foreach ($items as $item => $value) 
	{
		if ($item == $playerHasItem && $value == true) 
		{
			echo "You have the {$item}!<br />";
		} 
		elseif ($item == $playerHasItem && $value == false)
		{
			echo "You don't have the {$item}<br />";
		}
	}
	



?>