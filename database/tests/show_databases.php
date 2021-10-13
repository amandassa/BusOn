<?php

//var_dump(function_exists('mysqli_connect'));

/*
*/

$host = 'localhost';
$username = 'root';
$password = 'power_to_the_earth123';

$database = 'buson_db_v2';

$con = mysqli_connect($host, $username, $password);
$result = mysqli_query($con, "show databases;");

while($row = mysqli_fetch_array($result)){
    echo $row[0];
    echo "\n";
}

/*
*/

?>