<?php require_once 'vendor/autoload.php';

//substitua os valores dessas variaveis com os do seu banco de dados/server

$host = '127.0.0.1';
$username = 'root';
$password = '';

$database = 'buson_laravel';

//Esse é um arquivo txt com 50 nomes diferentes
//Certifique-se de que ele esteja na mesma pasta que este arquivo

$name_file = file(__DIR__.'\nomes.txt');

/* Essa váriavel gera emails aleatórios para os usuários
O gerador de emails aleátorios requer a biblioteca Faker
Para instalar Faker com o composer é so usar "composer require fakerphp/faker"
O faker também pode gerar nomes mas eu só descobri ele depois de fazer o arquivo com 50 nomes (Húbris)
*/

$email_generator = Faker\Factory::create();

/*
As senhas são as mesmas
*/

$pass = "vembrilhar";

//Número de usuários que serão inseridos

$inserts = 15;

//conexão com o bd

$con = mysqli_connect($host, $username, $password);
mysqli_select_db($con, $database);

/*
Nesse loop são gerados os dados de usuário e depois inseridos com uma query
*/

for($i = 0; $i < $inserts; $i++){
    $nu_cpf = rand(100, 800000);
    $nu_name = $name_file[rand(0, 49)];
    $nu_email = $email_generator->email();
    $nu_pass = $pass;
    
    $values = "INSERT INTO cliente (CPF, nome, email, senha)
    VALUES ($nu_cpf, '$nu_name', '$nu_email', '$nu_pass');";

    if (mysqli_query($con, $values)) {
        echo "Usuário cadastrado\n";
    } else {
        echo "Error: " . $values . "<br>" . mysqli_error($con);
        break;
    }


}

$con->close();


/*
*/
?>