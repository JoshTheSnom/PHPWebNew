<?php 
session_start();
$_SESSION["username"] = null;
$_SESSION["password"] = null;
$_SESSION["loggedin"] = false;
?>

<html>
<head></head>
<body> 

<form method="post" action="">
    <p>Userame: <input type="text" name="username" value="<?= $username ?>"></p>
    <p>Password: <input type="password" name="password" value="<?= $password ?>"></p>
    <p><input type="submit" name="submit"></p>
</form>
<a href = "login.php">Login instead</a>

<?php
$_SESSION["username"] = $_POST["username"]; 
$_SESSION["password"] = $_POST["password"];
$_SESSION["loggedin"] = true;
if(($_SESSION["loggedin"] == true)) {
	header("Location: loremipsum.php");
}
?>

</body>
</html>