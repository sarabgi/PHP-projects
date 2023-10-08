<?php
require_once 'config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($mysqli->connect_error){
    die("Connection error ". $mysqli->connect_error);
}else{
    echo "Database Connected !";
}
?>