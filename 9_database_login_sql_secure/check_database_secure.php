<?php

    $db = new SQLite3('cat_homepage.db');

    $enteredUsername = "babo'--";
    $enteredPassword = "asdf";

    $query = "SELECT * FROM users WHERE username = :username AND password = :password";

    $stmt = $db->prepare($query);

    $stmt->bindValue(':username', $enteredUsername, SQLITE3_TEXT);
    $stmt->bindValue(':password', $enteredPassword, SQLITE3_TEXT);

    $result = $stmt->execute();

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