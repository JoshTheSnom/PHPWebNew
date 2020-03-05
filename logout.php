<?php 
session_start();
if ($_SESSION["loggedin"] == false){
    header( "Location: login.php" );
}
$_SESSION["loggedin"] = false;
$_SESSION["username"] = null;
$_SESSION["password"] = null;
session_unset();
session_destroy();
?>
<p>You've been logged out...</p>
<a href = "login.php">Login</a>