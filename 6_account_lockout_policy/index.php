<?php
session_save_path('./');
session_start();

// SQLite 데이터베이스 연결
try {
    $db = new SQLite3('cat_homepage.db');
} catch (Exception $e) {
    // Handle database connection error
    die("Database connection failed: " . $e->getMessage());
}

// 사용자가 이미 로그인되어 있는지 확인
if (isset($_SESSION["username"])) {
    // 이미 로그인된 경우, login-success.php 페이지로 리디렉션
    header("Location: login-success.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered username and password
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Query to check user credentials
    $query = "SELECT * FROM users WHERE username='{$enteredUsername}' AND password='{$enteredPassword}' ";
    $result = $db->query($query);

    // Check if the entered credentials are valid
    if ($row = $result->fetchArray()) {
        // Redirect to the login success page
        $_SESSION["username"] = $enteredUsername;
        header("Location: login-success.php");
        exit();
    } else {
        // Invalid credentials, you might want to display an error message
        $errorMessage = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
                background-color: #DE628B;
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
                background-color: #DE628B;
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
                background-color: #DE628B;
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

    <header>
        <h1>고양이 네이버</h1>
    </header>

    <main>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <?php
            // Display error message if any
            if (isset($errorMessage)) {
                echo '<p style="color: red;">' . $errorMessage . '</p>';
            }
        ?>
            <h2>Login</h2>

            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
        </form>

        <!-- register button -->
        <p>아직 회원이 아니신가요? <a href="register.php">가입하기</a></p>

        <h2>Welcome to Your Website hello</h2>
        <p>This is a sample content for your website.</p>
    </main>

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>

</body>
</html>
