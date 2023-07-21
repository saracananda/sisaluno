<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisalun.css">
    <title>Document</title>
</head>
<body class="bodyimagem">

<div class="blocogeral">
    <div class="blocodeopcoes">
        <form class="form_aluno" method="GET" action="../aluno/crudaluno.php"> 
            <h2 class="titulodosite">CADASTRO DE ALUNO</h2> 
            <br>
            <!-- nome end idade datanascimento status -->
            <div class="linha">
                <label for="nomealuno">Nome</label>
                <input type="text" name="nomealuno" class="camponome">
            </div>

            <div class="linha">
                <label for="cpfaluno">CPF</label>
                <input type="text" name="cpfaluno" class="campocpf">

                <label for="idadealuno">Idade</label>
                <input type="number" name="idadealuno" class="campoidade"> 
            </div>
            <div class="linha">
                <label for="enderecoaluno">Endereço</label>
                <input type="text" name="enderecoaluno" class="campoendereco">
            </div>

            <div class="linha">
                <div class="coluna">
                    <label for="dataaluno" class="labeldata">Nascimento</label>
                    <input type="date" name="dataaluno" class="camponascimento">
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
                <input type="submit" name="cadastrar" value="CADASTRAR" class="cadastrar">
                </form>
                <button class="voltar"><a class ="voltar" href="../index.php">VOLTAR</a></button>
            </div>
            
            
            

    </div>  
</div>

</body>
</html>