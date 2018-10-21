<?php

	require ("player.php");

	$jason = new Player();
	
	echo "here is the health points before initializing: " . $jason->healthPoints;
	
	$jason->healthPoints = 100;
	
	echo "<br />";
	echo "health before damage: " . $jason->healthPoints;
	echo "<br />";
	echo "health after damage: " . $jason->setRandomDamage();

?>