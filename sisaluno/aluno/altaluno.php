<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisalun.css">
    <title>Alterar aluno</title>
</head>
<body class="bodyimagem">

<?php
    require_once('conexao.php');

    $id = $_POST['id'];

    ##sql para selecionar apens um professor
   $sql = "SELECT * FROM Aluno where id= :id";
    
    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':id',$id, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno=$retorno->fetch();
    
    ##armazena retorno em variaveis
    $cpf = $array_retorno['cpf'];
    $nome = $array_retorno['nome'];
    $idade = $array_retorno['idade'];
    $endereco = $array_retorno['endereco'];
    $datanasc = $array_retorno['datanascimento'];
    // $statusaluno = $array_retorno['statusaluno'];



?>

<div class="blocogeral">
<div class="blocodeopcoes">
<form class="form_aluno" method="POST" action="../aluno/crudaluno.php">
<h2 class="titulodosite">ALTERE OS DADOS DO ALUNO</h2> 
<br>

<input type="hidden" name="id" id="" value=<?php echo $id ?> >
<!-- nome end idade datanascimento status -->
<div class="linha">
    <label for="nomealuno">Nome</label>
    <input type="text" name="nomealuno" class="camponome" value=<?php echo $nome?>>
</div>

<div class="linha">
    <label for="cpfaluno">CPF</label>
    <input type="text" name="cpfaluno" class="campocpf" value=<?php echo $cpf ?>>

    <label for="idadealuno">Idade</label>
    <input type="number" name="idadealuno" class="campoidade" value=<?php echo $idade ?>> 
</div>
<div class="linha">
    <label for="enderecoaluno">Endereço</label>
    <input type="text" name="enderecoaluno" class="campoendereco" value=<?php echo $endereco ?>>
</div>

<div class="linha">
    <div class="coluna">
        <label for="dataaluno" class="labeldata">Nascimento</label>
        <input type="date" name="dataaluno" class="camponascimento" value=<?php echo $datanasc ?>>
    </div>
    <div class="coluna">
    <label id="ativo" for="Status_aluno">Status</label>
        <div class="linharadio">  
            <label for="Status_aluno" id="ativo">Ativo:</label>
            <input type="radio" name="Status_aluno" value="AV">

            <label for="Status_aluno">Desativo:</label>
            <input type="radio" name="Status_aluno" value="DS">
        </div>
    </div>
</div>
<br>
<br>
<div class="linhaconfirmacao">
    <input type="submit" name="update" value="Alterar" class="cadastrar">
</div>
</form>
</div>  
</div>
</body>
</html>