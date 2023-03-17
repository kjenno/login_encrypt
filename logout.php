<?php
session_start();
$_SESSION['loggedin'] = false;
session_destroy();
// Redirect to the login page:
header('Location: index.php');
?>