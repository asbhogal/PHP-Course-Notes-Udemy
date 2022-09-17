<?php
		/* ------------ NON-ASSOCIATIVE ARRAYS ------------ */

	$myArray = Array("oscar","lima","foxtrot","gamma");	// CREATES AN ARRAY CALLED 'myArray' AND ASSIGNS IT THE FOLLOWING VALUES

	print_r($myArray);									// DISPLAYS THE ENTIRE CONTENTS OF THE ARRAY
	
	echo "<br><br>";									// INSERTS A LINE BREAK
	
	echo $myArray[2];									// DISPLAYS THE CONTENTS OF INDEX/POSITION 2
	
	echo "<br><br>";									// INSERTS A LINE BREAK

	echo $myArray[1]; 									// DISPLAYS THE CONTENTS OF INDEX/POSITION 1

	echo "<br><br>";									// INSERTS A LINE BREAK

	$anotherArray[0] = "blue";							// ANOTHER WAY TO DEFINE AN ARRAY (IN VERTICAL FORM)
	$anotherArray[1] = "green";
	$anotherArray[2] = "yellow";

	print_r($anotherArray);								// OUTPUTS THE ENTIRE CONTENTS OF THE ARRAY

	echo "<br><br>";									// INSERTS A LINE BREAK

	echo sizeOf($myArray);								// RETURNS THE LENGTH OF THE ARRAY ABOVE

	echo "<br><br>";									// INSERTS A LINE BREAK

	$myArray[] = "tango";								// APPENDS A NEW ENTRY VALUE TO THE ARRAY

	print_r($myArray);									// OUTPUTS THE ENTIRE CONTENTS OF THE ARRAY WITH THE ADDITIONAL VALUE ABOVE

	echo "<br><br>";									// INSERTS A LINE BREAK

	unset($myArray[1]);									// REMOVES AN ITEM AND ITS POSITION FROM A NON-ASSOCIATIVE ARRAY (HERE, THE ENTRY IN POSITION 1 OF THE ABOVE ARRAY)

	print_r($myArray);									// OUTPUT CONFIRMS ABOVE DELETION

	echo "<br><br>";

		/* ------------ ASSOCIATIVE ARRAYS ------------ */

	$userData = array("userName"=>"hagrid", "userDOB"=>"21/03/1912", "userTelNo"=>"07349261031", "userGender"=>"M"); //DEFINES AND ASSIGNS VALUES TO AN ASSOCIATIVE ARRAY

	print_r($userData);									// OUTPUTS THE CONTENTS OF THE ASSOCIATIVE ARRAY

	echo "<br><br>";									// INSERTS A LINE BREAK

	$userData = array(									// ANOTHER WAY TO DEFINE AN ASSOCIATIVE ARRAY
		"userName" => "Hagrid",
		"userDOB" => "21/03/1912",
		"userTelNo" => "07349261031",
		"userGender" => "M",
	);

	print_r($userData);									// OUTPUTS THE CONTENTS OF THE ASSOCIATIVE ARRAY (SAME AS ABOVE)

	unset($userData["userDOB"]);						// DELETES AN ITEM AND ITS POSITION FROM THE ASSOCIATIVE ARRAY

	echo "<br><br>";									// INSERTS A LINE BREAK

	print_r($userData);									// OUTPUTS THE RESULT





		/*$additionalArray["favouriteFood"] = "coke";
	$additionalArray["favouriteFood"] = "apples";
	$additionalArray["favouriteFood"] = "melon";

	print_r($additionalArray);*/

?>