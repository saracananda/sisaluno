<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisaluno.css">
    <title>Alterar professor</title>
</head>
<body class="bodyimagem">

<?php
    require_once('../conexao.php');

    $id = $_POST['id'];

    ##sql para selecionar apens um professor
   $sql = "SELECT * FROM professor where id= :id";
    
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
    $estatus = $array_retorno['estatus'];



?>

<div class="blocogeral">
<div class="blocodeopcoes">
<form class="form_prof" method="POST" action="../professor/crudprof.php">
<h2 class="titulodosite">ALTERE OS DADOS DO PROFESSOR</h2> 
<br>

<input type="hidden" name="id" id="" value=<?php echo $id ?> >
<!-- nome end idade datanascimento status -->
<div class="linha">
    <label for="nomeprof">Nome</label>
    <input type="text" name="nomeprof" class="camponome" value="<?php echo htmlspecialchars($nome)?>">
</div>

<div class="linha">
    <label for="idadeprof">Idade</label>
    <input type="number" name="idadeprof" class="campoidade" value=<?php echo $idade ?>> 
</div>
<div class="linha">
    <label for="enderecoprof">Endereço</label>
    <input type="text" name="enderecoprof" class="campoendereco" value="<?php echo htmlspecialchars($endereco)?>">
</div>

<div class="linha">
    <label for="cpfprof">CPF</label>
    <input type="text" name="cpfprof" class="campocpf" required MAXLENGTH=11 value=<?php echo $cpf ?>>
</div>

<div class="menor">
    <div class="coluna">
        <label for="dataprof" class="labeldata">Nascimento</label>
        <input type="date" name="dataprof" class="camponascimento" value=<?php echo $datanasc ?>>
    </div>

    <?php
    if($estatus=='1'):?>
        <div class="coluna">
            <label id="ativo" for="Status_prof">Status</label>
            <div class="linharadio">  
                <label for="Status_prof" id="ativo">Ativo:</label>
                <input type="radio" name="Status_prof" value="true" checked>

            <label for="Status_prof">Desativo:</label>
                <input type="radio" name="Status_prof" value="false">
            </div>
        </div>
    <?php  endif; //fecha o if  ?>

    <?php if($estatus=='0'):?>
        <div class="coluna">
            <label id="ativo" for="Status_prof">Status</label>
            <div class="linharadio">  
                <label for="Status_prof" id="ativo">Ativo:</label>
                <input type="radio" name="Status_prof" value="true">

            <label for="Status_prof">Desativo:</label>
                <input type="radio" name="Status_prof" value="false" checked>
            </div>
        </div>
    <?php  endif; //fecha o if  ?>
    <?php
    if($estatus!='1' && $estatus!='0'):?>
        <div class="coluna">
            <label id="ativo" for="Status_prof">Status</label>
            <div class="linharadio">  
                <label for="Status_prof" id="ativo">Ativo:</label>
                <input type="radio" name="Status_prof" value="true">

            <label for="Status_prof">Desativo:</label>
                <input type="radio" name="Status_prof" value="false" checked>
            </div>
        </div>
    <?php  endif; //fecha o if  ?>

</div>
<br>
<div class="linhaconfirmacao">
    <input type="submit" name="update" value="Alterar" class="cadastrar">
</div>
</form>
</div>  
</div>
</body>
</html>
