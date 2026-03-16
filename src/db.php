<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';
$database = 'php-crm';

// create connection
$conn = new mysqli($serverName, $userName, $password, $database);

// check connection
if($conn -> connect_error){
    die('connection failed: '. $conn -> connect_error);
}
echo 'connected successfully';

?>