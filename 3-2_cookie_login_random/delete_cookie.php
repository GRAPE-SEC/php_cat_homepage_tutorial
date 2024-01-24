<?php
// "user" 쿠키 삭제
setcookie("user", "", time() - 3600, "/");
?>