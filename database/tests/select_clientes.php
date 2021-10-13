<?php

//var_dump(function_exists('mysqli_connect'));

/*
*/

function print_query_array($querry_arr, $spacing){
    while($row = $querry_arr -> fetch_assoc()){
        foreach($row as $r){
            echo $r;
            if ($spacing == 0){
                echo " ";
            }else{
                echo "\n";
            }
        }
        
    }
    echo "\n";
}

$host = 'localhost';
$username = 'root';
$password = '';

$database = 'buson_laravel';

$con = mysqli_connect($host, $username, $password);

mysqli_query($con, "use buson_laravel;");

$colunas = mysqli_query($con, "show columns from cliente");

$cliente_data = mysqli_query($con, "select * from cliente;");

//print_query_array($colunas, 0);
print_query_array($cliente_data, 0);

$con->close();



/*
*/

?>