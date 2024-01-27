<?php

    $db = new SQLite3('cat_homepage.db');

    $enteredUsername = "babo'--";
    $enteredPassword = "asdf";

    // Query to check user credentials
    $query = "SELECT * FROM users WHERE username='{$enteredUsername}' AND password='{$enteredPassword}' ";
    $result = $db->query($query);

    // Check if the entered credentials are valid

    echo "your query : $query";
    echo "<br>";
    
    $row = $result->fetchArray();

    echo "row : $row <br>";
    echo "<br>";
    
    echo "row['username'] : {$row['username']} <br>";
    echo "row['password'] : {$row['password']} <br>";

    echo "<br>";

    if ($row) {
        echo "this is on database : $enteredUsername/$enteredPassword";
        echo $result->fetchArray();
    }else{
        echo "not in database : $enteredUsername/$enteredPassword";
    }

?>