<?php
    print_r($_GET);             // OUTPUTS THE CONTENTS OF THE ARRAY, WHICH WILL BE THE VARIABLES PASSED TO IT VIA THE URL ENTRY & SUBMISSION

    echo "<br><br>";

    echo "Hi there ".$_GET['name']."!";     // OUTPUTS THE VALUE OF THE VARIABLE name IN A CONCATENATED STRING

    #echo $_GET["gender"];       // OUTPUTS THE VALUE AT INDEX gender, AS THIS ARRAY IS ASSOCIATIVE
                                 // COMMENTED OUT TO PREVENT WARNINGS WHEN ARRAY IS EMPTY/VALUE-VARIABLE ISN'T PARSED TO ARRAY
    
?>

<!--------- SENDING VARIABLE VALUES TO SERVER SCRIPT VIA HTML-BUILT FORM --------->

<p>Enter your name</p>                      <!--HTML MUST BE CODED OUTSIDE PHP OPEN-CLOSE SYNTAX TO BE PARSED AND RENDERED CORRECTLY FRONT-END-->

<form>
    <input name="name" type="text">
    <input type="submit" value="Submit">
</form>