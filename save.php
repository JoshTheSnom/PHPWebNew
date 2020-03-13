<?php

$userArray = json_decode(file_get_contents("users.txt"), true);
$username = $_POST["username"]; 
$password = $_POST["password"];
if (!array_key_exists($username,$userArray)) {
    $user = array($username => $password);
    echo var_dump($user);
    $users = fopen("users.txt", "w") or die("unable to write/create file");   
    fwrite($users, json_encode(array_merge($userArray, $user)));
    fclose($users);
    $_SESSION["is_logged"] = true;
    header("Location: /loremipsum"); 
} else echo "Username taken."

?>