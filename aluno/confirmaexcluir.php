<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisaluno.css">
    <title>Document</title>
</head>
<body class="bodyimagem">
<div class="blocogeral">
    <?php
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    ?>
<div class="blocodeopcoes">
    <h3>Tem certeza que deseja excluir o aluno(a) <?php echo "$nome" ?>?</h3>
    <form  method="GET" action="crudaluno.php" >
    <input name="id" type="hidden" value="<?php echo $id?>"/>
    <input name="nome" type="hidden" value="<?php echo $nome?>"/>
    <button name='excluir'type='submit' class="botaopagexclusao">Excluir</button> 
    <button name='cancelar' class="botaopagexclusao"><a href="listaaluno.php">Cancelar</a></button>
    </form>
    <br>

</div> 
</div> 
</body>
</html>