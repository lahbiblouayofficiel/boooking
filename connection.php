<?php 
//cors and header ..

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Content-Type: application/json');

$servername= "localhost:3306";
$username= "root";
$password= "SteSTD2017";
$database="almaktaba";
/*$servername= "cpanel-box2005.bluehost.com";
$username= "toplinek_WPAYH";
$password= "jEH#Y{TA5=C@qLON)";
$database="toplinek_almaktaba";*/
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    $request_body = file_get_contents('php://input');
    $data = json_decode($request_body, true);