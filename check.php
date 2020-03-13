<?php 

$usrArray = json_decode(file_get_contents("users.txt"), true);
$username = $_POST["username"]; 
$password = $_POST["password"]; ;
if (array_key_exists($username,$usrArray)){
   if ($usrArray[$username] === $password) {
      $_SESSION["is_logged"] = true;
      header("Location: /loremipsum");  
   } else echo "Wrong Username or Password";

} else echo "Wrong Username or Password";

?>