<?php

    /*-------- TO OUTPUT A LIST OF NUMBERS 0 - 9 --------*/

    $i = 0;                 // SET TO ZERO AS THE FIRST NUMBER IN THIS RANGE = 0

    while ($i < 10) {       // ie. WHILE SOMETHING/CONDITION IS TRUE.... CURLY BRACKETS WILL THEN DENOTE WHAT OCCURS/IS PARSED
        echo $i."<br>";     // ie. WHILE THE VALUE OF VARIABLE i IS LESS THAN TEN, DISPLAY THE VALUE OF i, FOLLOWED BY A LINE BREAK
        $i++;               // INCREMENT THE VALUE OF i AFTERWARDS (INCREMENT IS VITAL, OTHERWISE LOOP WILL REPEAT INFINITELY)
    }                       // AS SEEN, THE RESULT IS THE SAME AS THAT SEEN IN PART OF THE FOR-EACH LOOPS FILE, JUST USING A DIFFERENT CONSTRUCT

   echo "<br><br>";
   
    /*-------- TO OUTPUT A LIST OF TEN NUMBERS IN THE 5 TIMES TABLE --------*/

    $i2 = 5;               // SINCE THE FIRST NUMBER IN THE 5 TIMES TABLE = 5, THE VARIABLE MUST HAVE THIS START NUMBER TO BEGIN WITH

    while ($i2 <= 50) {    // SINCE THE TENTH NUMBER IN THE FIVE TIMES TABLE = 50, THE CONDITION MUST STATE THIS
        echo $i2."<br>";
        $i2 = $i2 + 5;    // SINCE THE FIVE TIMES TABLE ADDS AN INCREMENT OF 5 TO EACH VALUE
    }      

    echo "<br><br>";

        #OR

    $i3 = 1;                  

    while ($i3 <= 10) {     //OBTAINS THE FIRST TEN ITEMS IN THE ith TIMES TABLE
        $j = $i3 * 5;       // INSTEAD, CREATE A NEW VARIABLE CALLED j AND ASSIGN IT THE VALUE OF i3 TIMES 5
        echo $j."<br>";     // OUTPUT THE VALUE OF THE NEW VARIABLE
        $i3++;              // INCREMENT THE VALUE OF VARIABLE i3
    }

    echo "<br><br>";

    /*-------- TO LOOP THROUGH AN ARRAY --------*/

    $family = array("Harry", "Ron", "Hermoine", "Draco", "Hagrid");

    $iFamily = 0;

    while ($iFamily < sizeof($family)) {
        echo $family[$iFamily]."<br>";
        $iFamily++;
    }


   ?>