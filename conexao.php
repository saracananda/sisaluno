<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

<?php 

define('SERVER', '10.70.230.53:3306'); //servidor
define('USUARIO', 'sisaluno'); //usuario
define('SENHA', 'sisaluno2023'); //senha da conexão
define('DATABASE', 'sisaluno'); //nome da database

try{
    $conexao = new pdo('mysql:host='.SERVER.';dbname='.DATABASE, USUARIO, SENHA);
}

catch (PDOException $e){
    echo "Erro: Conexão com o banco de dados não estabelecida. Erro gerado." .$e->getMessage();
}
?>

</body>
