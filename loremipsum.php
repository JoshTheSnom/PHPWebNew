<?php 
session_start();
if ($_SESSION["loggedin"] == false){
    header( "Location: login.php" );
}
?>

<html>
<head>
<title>Lorem Ipsum</title>
</head>
<body>
<?php
echo $_SESSION["username"];
?>
<p>Lorem ipsum</p>
<a href="logout.php">Logout</a>

</body>
</html>