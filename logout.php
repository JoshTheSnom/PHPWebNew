<?php 
$_SESSION["is_logged"] = false;
session_unset();
session_destroy();
header( "Location: /register" );
die();
?>