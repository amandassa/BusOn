<?php

//var_dump(function_exists('mysqli_connect'));

/*
*/

$host = 'localhost';
$username = 'root';
$password = 'power_to_the_earth123';

$database = 'buson_db_v2';

$con = mysqli_connect($host, $username, $password);

mysqli_query($con, "use buson_db_v2;");

$result = mysqli_query($con, "show tables");

while($row = mysqli_fetch_array($result)){
    echo $row[0];
    echo "\n";
}

/*
*/

?>