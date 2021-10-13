<?php

//substitua os valores dessas variaveis com os do seu banco de dados/server

$host = 'l';
$username = 'r';
$password = 'p';

$database = 'buson_db_v2';

$con = mysqli_connect($host, $username, $password);
mysqli_select_db($con, "buson_db_v2");




/*
if (mysqli_query($con, "delete from trecho;")) {
    echo "del.";
} else {
    echo "Error: " . $values . "<br>" . mysqli_error($con);
}
*/



$last_code_query = mysqli_query($con, "select codigo from trecho order by codigo desc limit 1;");
$last_code = $last_code_query->fetch_array();
$nu_code = intval($last_code) + 1;

$city_file = file(__DIR__.'\trechos.txt');
//echo sizeof($city_file);

$preço = 10;


for($i = 0; $i < sizeof($city_file); $i+=3){

    echo $nu_code;
    echo "\n";
    
    $j = $i+1;
    if($j < sizeof($city_file)){

        $partida = str_replace("\n", "", $city_file[$i]);
        $destino = str_replace("\n", "", $city_file[$j]);
        
        $values = "INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, preco)
        VALUES ($nu_code, '$partida', '$destino', $preço);";

        if (mysqli_query($con, $values)) {
            echo "Trecho criado.\n";
        } else {
            echo "Error: " . $values . "<br>" . mysqli_error($con);
            break;
        }
    }
    $nu_code+= 1;
}

/*
*/

$con->close();





?>