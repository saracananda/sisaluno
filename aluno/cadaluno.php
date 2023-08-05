<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisaluno.css">
    <title>CADASTRO DE ALUNOS</title>
</head>
<body class="bodyimagem">

<div class="blocogeral">
    <div class="blocodeopcoes">
        <form class="form_aluno" method="GET" action="../aluno/crudaluno.php"> 
            <h2 class="titulodosite">CADASTRO DE ALUNO</h2> 
            <br>
            <div class="campo-dados">
            <div class="linha">
                <label for="nomealuno" class= "labellinhamaior">Nome</label>
                <input type="text" name="nomealuno" class="camponome" required MINLENGTH='3' MAXLENGTH='100'>
            </div>

            <div class="linha">
                <label for="idadealuno" class= "labellinhamaior">Idade</label>
                <input type="number" name="idadealuno" class="campoidade" required min='12' max='120'> 
            </div>
            <div class="linha">
                <label for="enderecoaluno" class= "labellinhamaior">Endereço</label>
                <input type="text" name="enderecoaluno" class="campoendereco" required MINLENGTH='3' MAXLENGTH='100'>
            </div>
            </div>

            <div class="menor">
                <div class="coluna">
                    <label for="dataaluno" class="labeldata">Nascimento:</label>
                    <input type="date" name="dataaluno" class="camponascimento" id="#formcadastroaluno" required>
                </div>
                <div class="coluna">
                <label for="Status_aluno">Status:</label>
                    <div class="linharadio">
                        <div class="linhamenor">
                            <label for="Status_aluno" id="ativo" class="labelmenor">Ativo:</label>
                            <input type="radio" name="Status_aluno" value="true" required>
                        </div>
                        <div class="linhamenor">
                            <label for="Status_aluno" class="labelmenor">Desativo:</label>
                            <input type="radio" name="Status_aluno" value="false">
                        </div>
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