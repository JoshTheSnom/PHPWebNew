<?php
session_start();
/*if ($_SESSION["is_logged"]){
    header( "Location: /loremipsum" );
    die();
 }*/
?>

<form method="POST">
    <p>Username: <input name="username"></p>
    <p>Password: <input name="password" type="password"></p>
    <button type="submit">Register</button>
</form>

<a href = "login.php">Login instead</a>

<?php
$file = "users.json";
$username = $_POST["username"];
$password = $_POST["password"];
$arr_data = array();
$formdata = array(
    'username' => $username,
    'password' => $password
);
$jsondata = file_get_contents($file);
$arr_data = json_decode($file, true);
//array_push($arr_data, $formdata);
$arr_data[] = $formdata;

$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
file_put_contents($file, $jsondata);
/*if(file_put_contents($file, $jsondata)) {
    $_SESSION["is_logged"] = true;
    header( "Location: /loremipsum" );
}
else 
   echo "error";*/
?>