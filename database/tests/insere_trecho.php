<?php
/**
 * Adicionando um ~único trecho para teste
 */
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'buson_laravel';

$con = mysqli_connect($host, $username, $password);
mysqli_select_db($con, "buson_laravel");

$inserir = "INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, preco) 
VALUES ('1', 'Serrinha', 'Tucano', '24')";

if (mysqli_query($con, $inserir)) {
    echo "Um novo trecho foi adicionado.";
}else{
    echo "Ocorreu um erro em " . $inserir . mysqli_error($con);
} 
$con->close();
?>