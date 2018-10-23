<?php
	$randomNum = rand(1,4);
	echo "the number is: " . $randomNum;
	echo "<br />";
	switch ($randomNum) {
		case 1:
			echo "It is 1";
			break;
			echo "<br />";
		case 2:
			echo "It is 2";
			break;
			echo "<br />";
		case 3:
			echo "It is 3";
			break;
		default:
			echo "It is none of these";
	}

?>