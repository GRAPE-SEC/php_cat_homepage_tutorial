<?php
setcookie("user", "John Doe", time() + 3600, "/");

        // 쿠키가 설정되었는지 확인
        if (isset($_COOKIE["user"])) {
            echo "쿠키 'user'의 값: " . $_COOKIE["user"];
        } else {
            echo "쿠키가 설정되지 않았습니다.";
        }
        
?>