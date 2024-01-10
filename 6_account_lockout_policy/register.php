<?php

$db = new SQLite3('cat_homepage.db');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // check username duplicate
    $checkUser = "SELECT * FROM users WHERE username = '$username'";
    $checkUserResult = $db->querySingle($checkUser);

    if($checkUserResult){
        $registerMessage = "이미 존재하는 닉네임입니다...";
    }else{
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result = $db->exec($sql);
        if ($result) {
            // Insert user into the database
            $registerMessage = "가입완료!";
        } else {
            $registerMessage = "데이터베이스 오류 발생";
            // echo "Error: " . $db->lastErrorMsg();
        }
    }
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        main {
            padding: 20px;
            margin-bottom: 80px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            padding: 12px;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        footer, nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>

    <form method="post">
        <?php
            // Display error message if any
            if (isset($registerMessage)) {
                echo '<p style="color: red;">' . $registerMessage . '</p>';
            }
        ?>
        <h1>가입하기</h1>
        <h3>환영합니다~</h3>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="가입">
        <a href="index.php" class="button">뒤로가기</a>

    </form>
</body>
</html>
