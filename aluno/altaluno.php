<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisaluno.css">
    <title>Alterar aluno</title>
</head>
<body class="bodyimagem">

<?php
    require_once('../conexao.php');

    $id = $_POST['id'];

    ##sql para selecionar apens um professor
   $sql = "SELECT * FROM aluno where id= :id";
    
    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':id',$id, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno=$retorno->fetch();
    
    ##armazena retorno em variaveis
    // $cpf = $array_retorno['cpf'];
    $nome = $array_retorno['nome'];
    $idade = $array_retorno['idade'];
    $endereco = $array_retorno['endereco'];
    $datanasc = $array_retorno['datanascimento'];
    $estatus = $array_retorno['estatus'];



?>

<div class="blocogeral">
    <div class="blocodeopcoes">
        <form class="form_aluno" method="POST" action="crudaluno.php">
            <h2 class="titulodosite">ALTERE OS DADOS DO ALUNO</h2> 

            <div class="campo-dados">
            <input type="hidden" name="id" id="" value=<?php echo $id ?> >

            <div class="linha">
                <label for="nomealuno" class= "labellinhamaior">Nome</label>
                <input type="text" name="nomealuno" class="camponome" value="<?php echo htmlspecialchars($nome)?>" required MINLENGTH='3' MAXLENGTH='100'>
            </div>

            <div class="linha">
                <label for="idadealuno" class= "labellinhamaior">Idade</label>
                <input type="number" name="idadealuno" class="campoidade" value="<?php echo $idade ?>" required min='12' max='120'> 
            </div>
            <div class="linha">
                <label for="enderecoaluno" class= "labellinhamaior">Endereço</label>
                <input type="text" name="enderecoaluno" class="campoendereco" value="<?php echo htmlspecialchars($endereco)?>" required MINLENGTH='3' MAXLENGTH='100'>
            </div>
            </div>

            <div class="menor">
                <div class="coluna">
                    <label for="dataaluno" class="labeldata">Nascimento</label>
                    <input type="date" name="dataaluno" class="camponascimento" id="#formcadastroaluno" value="<?php echo $datanasc ?>" required>
                </div>

    <?php
    if($estatus=='true'):?>
                <div class="coluna">
                    <label for="Status_aluno">Status:</label>
                    <div class="linharadio">  
                        <div class="linhamenor">
                            <label for="Status_aluno" id="ativo" class="labelmenor">Ativo:</label>
                            <input type="radio" name="Status_aluno" value="true" checked>
                        </div>
                        <div class="linhamenor">
                            <label for="Status_aluno" class="labelmenor">Desativo:</label>
                            <input type="radio" name="Status_aluno" value="false">
                        </div>
                </div>
            </div>    
    <?php  endif; //fecha o if  ?>

    <?php if($estatus=='false'):?>
        <div class="coluna">
            <label id="ativo" for="Status_aluno">Status</label>
            <div class="linharadio">  
                <div class="linhamenor">
                    <label for="Status_aluno" id="ativo" class="labelmenor">Ativo:</label>
                    <input type="radio" name="Status_aluno" value="true">
                </div>
                <div class="linhamenor">
                    <label for="Status_aluno" class="labelmenor">Desativo:</label>
                    <input type="radio" name="Status_aluno" value="false" checked>
                </div>
            </div>
        </div>
    <?php  endif; //fecha o if  ?>
    <?php
    if($estatus!='true' && $estatus!='false'):?>
        <div class="coluna">
            <label id="ativo" for="Status_aluno">Status</label>
            <div class="linharadio">  
                <div class="linhamenor">
                    <label for="Status_aluno" id="ativo" class="labelmenor">Ativo:</label>
                    <input type="radio" name="Status_aluno" value="true">
                </div>
                <div class="linhamenor">
                    <label for="Status_aluno" class="labelmenor">Desativo:</label>
                    <input type="radio" name="Status_aluno" value="false" checked>
                </div>
            </div>
        </div>
    <?php  endif; //fecha o if  ?>

</div>
<br>
<br>
    <div class="linhaconfirmacao">
        <input type="submit" name="update" value="Alterar" class="cadastrar">
</form>
</div>
</div>  
</div>
</body>
</html>
