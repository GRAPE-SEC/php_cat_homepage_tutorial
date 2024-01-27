<!--logout.php-->

<h1>logout...</h1>

<?php

// delete cookie
setcookie('user', '', time() - 3600);

// Redirect to the login page
header("Location: index.php");
exit();
?>

