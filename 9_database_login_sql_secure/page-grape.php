<!--page-grape.php -->
<?php
session_save_path('./');
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] == 'grape') {
    echo "login success!";
} else {
    header("Location: goback.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grape cat web</title>

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

    <header>
        <h1>개인 페이지</h1>
        <a href="logout.php"><h1>Logout</h1></a>
    </header>

    <main>
        <h2>안녕하세요 grape 의 개인페이지입니다.</h2>
        <img src="https://img.segye.com/content/image/2017/08/30/20170830515039.jpg" alt="포도 사진">
        <h3><나의 사진> </h3>
        <h3>전화번호 : 010-XXXX-XXXX<h3>
        <h3>계좌번호 : 고양이은행 MMM-MMM-MMM<h3>    
    </main>

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>

</body>
</html>