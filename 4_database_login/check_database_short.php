<?php

    $db = new SQLite3('cat_homepage.db');

    $enteredUsername = "grapehacker";
    $enteredPassword = "secret1234";

    // Query to check user credentials
    $query = "SELECT * FROM users WHERE username='{$enteredUsername}' AND password='{$enteredPassword}' ";
    $result = $db->query($query);

    // Check if the entered credentials are valid

    echo "your query : $query";
    echo "<br>";
    

    if ($result->fetchArray()) {
        echo "this is on database : $enteredUsername/$enteredPassword";
        echo $result->fetchArray();
    }else{
        echo "CAUTION not in database : $enteredUsername/$enteredPassword";
    }

?>