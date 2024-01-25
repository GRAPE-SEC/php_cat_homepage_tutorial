<h1>logout...</h1>

<?php
session_save_path('./');
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: index.php");
exit();
?>

