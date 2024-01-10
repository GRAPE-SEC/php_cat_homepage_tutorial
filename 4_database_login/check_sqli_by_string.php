<?php

    $db = new SQLite3('cat_homepage.db');

    // Query to check user credentials
    $query = "SELECT * FROM users WHERE username='blablabla' AND password='' or 1=1--blablabla' ";
    $result = $db->query($query);

    // Check if the entered credentials are valid

    echo "your query : $query";
    echo "<br>";

    $row = $result->fetchArray();
    echo "row[1] : $row[1]";
    echo "<br>";
    echo "row[2] : $row[2]";
    echo "<br>";
    echo "row[3] : $row[3]";
    echo "<br>";
    echo "row[4] : $row[4]";
    echo "<br>";
    

    if ($result->fetchArray()) {
        echo "this is on database : $enteredUsername/$enteredPassword";
    }else{
        echo "CAUTION not in database : $enteredUsername/$enteredPassword";
    }

?>