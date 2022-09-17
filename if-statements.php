<?php
	$user = "Aman";
	if ($user == "Aman") {
		echo "Hello Aman";
	} else {
		echo "I don't know you";
	}

	echo "<br><br>";

	$age = 19;
	if ($age >= 18 && $user == "Aman") {		// IF THE AGE INPUTTED IS MORE THAN OR EQUAL TO 18 **AND** USER NAME IS AMAN, PARSE THE FOLLOWING - && IS USED TO COMPARE AND ENSURE TWO CONDITIONS ARE MET
		echo "You may proceed";
	} else {									// OTHERWISE, PARSE THE CODE BELOW
		echo "You are too young";
	}

	echo "<br><br>";

	if ($age >=18 || $user = "Aman") {			// IF THE AGE INPUTTED IS MORE THAN OR EQUAL TO 18 **OR** THE USERNAME IS AMAN, PARSE THE FOLLOWING - || IS USED TO COMPARE AND ENSURE EITHER ONE OF THE TWO CONDITIONS ARE MET
		echo "You may proceed";
	} else {									// OTHERWISE, PARSE THE CODE BELOW
		echo "You are too young";
	}
	
?>