<?php

//var_dump(function_exists('mysqli_connect'));

/*
*/

function print_query_array($querry_arr, $spacing){
    while($row = $querry_arr -> fetch_assoc()){
        foreach($row as $r){
            echo $r;
            if ($spacing == 0){
                echo " | ";
            }else{
                echo "\n";
            }
        }
        
    }
    echo "\n";
}

$host = 'localhost';
$username = 'root';
$password = 'power_to_the_earth123';

$database = 'buson_db_v2';

$con = mysqli_connect($host, $username, $password);

mysqli_query($con, "use buson_db_v2;");

$cliente_data = mysqli_query($con, "select * from trecho;");

print_query_array($cliente_data, 0);

$con->close();



/*
*/

?>