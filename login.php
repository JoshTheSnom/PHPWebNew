<?php 
session_start();
if ($_SESSION["is_logged"]){
   header( "Location: /loremipsum" );
   die();
}
?>

<form action= "check" method="post" >
    <p>Userame: <input type="text" name="name"></p>
    <p>Password: <input type="password" name="pass"></p>
    <button type="submit">Login</button>
</form>

<a href = "register.php">Register instead</a>