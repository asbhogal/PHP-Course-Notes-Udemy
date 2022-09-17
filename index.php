<?php
	$name = "Aman";
	echo $name;

	$firstSentence = "<p>This is the first part";
	$secondSentence = "of this sentence</p>";

	echo $firstSentence." ".$secondSentence; //CONCATENATES CONTENTS OF STRING VARIABLES
?>

<?php
	$name = "Aman";
	echo "<p>My name is $name</p>";
	$string1 = "<p>This is the first part</p>";
	$string2 = "<p>of a sentence</p>";
	echo $string1." ".$string2;
?>

<?php
	$myNumber = 45;
	$calculation = $myNumber * 31 / 97 + 4;
	echo $calculation;
?>

<?php
	$myBool = true;
	echo "<p>Is this statement true? ".$myBool."</php>";
?>

<?php
	$myBool = false; // ASSIGNING true OR false TO A VARIABLE INSTANTLY DESIGNATES IT BOOLEAN
	echo "<p>Is this statement true? ".$myBool."</php>"; //RETURNS AN EMPTY VALUE
?>

<?php
	$variableName = "name";
	echo $$variableName; //CALLING A VARIABLE WITHIN A VARIABLE
?>