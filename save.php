<?php
$file = "users.json";
$arr_data = array();
$formdata = array(
    'username' => $_POST["username"],
    'password' => $_POST["password"]
);
$jsondata = file_get_contents($file);
$arr_data = json_decode($file, true);
array_push($arr_data,$formdata);

$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
if(file_put_contents($myFile, $jsondata)) {
    $_SESSION["is_logged"] = true;
    header( "Location: /loremipsum" );
}
else 
    echo "error";

?>