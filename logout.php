<?php 
session_start();
$_SESSION["is_logged"] = false;
session_unset();
session_destroy();
header( "Location: /login" );
die();
?>