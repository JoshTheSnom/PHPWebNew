<?php
session_start();
?>

<form method="post" action="save">
    <p>Username: <input name="username"></p>
    <p>Password: <input name="password" type="password"></p>
    <button type="submit">Register</button>
</form>

<a href = "login.php">Login instead</a>
