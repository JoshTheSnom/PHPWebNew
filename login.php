<?php 
session_start();
if ($_SESSION["loggedin"]){
   //header( "Location: loremipsum.php" );
   echo "jsem tady";
}
$username = null;
$password = null;
$_SESSION["loggedin"] = false;
?>

<html>
<head>
</head>
<body>

<form method="post" >
	<p>Name: <input type="text" name="username"></p>
	<p>Password: <input type="text" name="password"></p>
	<p><input type="submit"></p>
</form>
<a href = "register.php">Register instead</a>

  
<?php 
 if (($_POST["username"] == $username && ($_POST["password"] == $password)){
    $_SESSION["loggedin"] = true;
	//header( "Location: loremipsum.php" );
	echo "jsem tady2";
 } else echo "Wrong username or password"

?>
</body>
</html>