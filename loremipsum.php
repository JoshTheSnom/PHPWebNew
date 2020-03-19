<?php 
session_start();
if ($_SESSION["is_logged"] === false){
    header( "Location: /login" );
    die();
}
?>

Lorem ipsum or something

<a href= /logout>Logout</a>