<?php
session_start();
include 'userStuff.php';

if ($_SESSION["is_logged"] ?? null) {
    header("Location: /loremipsum");
    die();
 }


$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

/*if (!is_string($username) || !is_string($password)) {
    echo "Username or password missing.";
}*/
if (($username !== null) && ($password !== null)) {
    (new userStuff())->saveUser($username, $password);
    $_SESSION['username'] = $username;
    $_SESSION['is_logged'] = true;
    header("location: /loremipsum");
    die();
}
include 'register.phtml';