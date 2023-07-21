<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisalun.css">
    <title>Document</title>
</head>
<body class="bodyimagem">
<div class="blocogeral">
    <?php
    $id = $_GET['id'];
    ?>
<div class="blocodeopcoes">
    <h3>Tem certeza que deseja excluir?</h3>
    <form  method="GET" action="crudaluno.php" >
    <input name="id" type="hidden" value="<?php echo $id?>"/>
    <button name='excluir'type='submit'>Excluir</button>
    </form>
    <br>
    <button name='cancelar'><a href="listaaluno.php">Cancelar</a></button>
</div> 
</div> 
</body>
</html>