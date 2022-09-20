<?php

	print_r($_POST);		// SIMILAR TO 'GET', THE 'POST' IS REPLACED HERE TO RETRIEVE THE VALUE OF THE VARIABLE (STORED AFTER SUBMISSION)
											// 'POST' VARIABLES WORK SIMILAR TO 'GET' VARIABLES, BUT AREN'T ENCODED IN THE URL. THIS MAKES THEM MORE SECURE.
											// 'POST' VARIABLES CAN ALSO BE PASSED CERTAIN CHARACTERS TO VARIABLES WHICH WON'T RETURN ERRORS, UNLIKE 'GET'
											// THE ABOVE print WILL OUTPUT THE VALUE AS A NUMBER IN AN ARRAY e.g. IF THE NUMBER 3 IS SUBMITTED : 'Array ( [number] => 3 )'

											// ASIDE FROM THE FORM METHOD CHANGE, EVERYTHING WORKS IN PRETTY MUCH THE SAME WAY AS THEY DO WITH 'GET' VARIABLES

?>

<form method="post">  <!--FOR A FORM METHOD, THE DEFAULT 'GET' NEEDS TO BE CHANGED TO 'POST' ('GET' IS SET BY DEFAULT EVEN WITH "")-->
	<input name="number" type="text">
	<input type="submit" value="submit">
</form>

<!--A GOOD WAY TO TEST THIS IS TO PASS A VALUE TO THE INPUT. ON SUBMIT, IF THE VALUE IS NOT SENT TO THE URL, THE CONFIG IS CORRECT.-->
<!--REFRESHING THE PAGE AFTERWARDS WILL RETURN A 'CONFIRM RESUBMISSION' MESSAGE IN THE BROWSER (ie. CHECKING IF THE 'POST' VARIABLE SHOULD BE SUBMITTED AGAIN)-->

