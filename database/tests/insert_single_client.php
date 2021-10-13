<?php

//var_dump(function_exists('mysqli_connect'));

/*
*/

function print_query_array($querry_arr, $spacing){
    while($row = mysqli_fetch_array($querry_arr)){
        echo $row[0];
        if ($spacing == 0){
            echo " ";
        }else{
            echo "\n";
        }
    }
}

$host = 'localhost';
$username = 'root';
$password = 'power_to_the_earth123';

$database = 'buson_db_v2';

$con = mysqli_connect($host, $username, $password);
mysqli_select_db($con, "buson_db_v2");


$values = "INSERT INTO cliente (CPF, nome, email, senha)
VALUES ('123', 'Carlos', 'hotflashes@gmail.com', '3rdletter')";

if (mysqli_query($con, $values)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $values . "<br>" . mysqli_error($con);
  }

$con->close();



/*
*/

?>