<?php 
session_start();

if (($_SESSION["is_logged"] ?? null) == false){
    header( "Location: /login" );
    die();
}
$username = $_SESSION['username'];
include 'loremipsum.phtml';