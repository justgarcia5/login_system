<?php

$servername = 'localhost';
$dbusername = 'root';
$password = 'root';
$dbname = 'loginsystemtut';

$conn = mysqli_connect($servername, $dbusername, $password, $dbname);

// Check connection
if(!$conn){
  die("ERROR: Could not connect. ".mysqli_connect_error());
}
