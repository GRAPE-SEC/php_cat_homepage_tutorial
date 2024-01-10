<?php

    $db = new SQLite3('cat_homepage.db');

    $enteredUsername = "grapehacker";
    $enteredPassword = "secret1234";

    // Query to check user credentials
    $query = "SELECT * FROM users WHERE username='" . $enteredUsername . "' AND password='" . $enteredPassword . "'";
    $result = $db->query($query);

    // Check if the entered credentials are valid

    echo "your query : $query";
    echo "<br>";
    
    $row = $result->fetchArray();

    echo "row : $row <br>";
    echo "<br>";
    
    echo "row[0] : $row[0] <br>";
    echo "row[1] : $row[1] <br>";
    echo "row[2] : $row[2] <br>";
    echo "row[3] : $row[3] <br>";
    echo "<br>";

    if ($row = $result->fetchArray()) {
        echo "this is on database : $enteredUsername/$enteredPassword";
        echo $result->fetchArray();
    }else{
        echo "not in database : $enteredUsername/$enteredPassword";
    }

?>