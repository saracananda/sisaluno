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

define('SERVER', 'localhost'); //servidor
define('USUARIO', 'root'); //usuario
define('SENHA', ''); //senha da conexão
define('DATABASE', 'siscadastro'); //nome da database

try{
    $conexao = new pdo('mysql:host='.SERVER.';dbname='.DATABASE, USUARIO, SENHA);
}

catch (PDOException $e){
    echo "Erro: Conexão com o banco de dados não estabelecida. Erro gerado." .$e->getMessage();
}
?>

</body>
