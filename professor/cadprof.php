<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisaluno.css">
    <title>Document</title>
</head>
<body class="bodyimagem">

<div class="blocogeral">
    <div class="blocodeopcoes">
        <form class="form_prof" method="GET" action="../professor/crudprof.php"> 
            <h2 class="titulodosite">CADASTRO DE PROFESSOR</h2> 
            <br>
            <!-- nome end idade datanascimento status -->
            <div class="linha">
                <label for="nomeprof">Nome</label>
                <input type="text" name="nomeprof" class="camponome" required MAXLENGTH=100>
            </div>

            <div class="linha">
                <label for="idadeprof">Idade</label>
                <input type="number" name="idadeprof" class="campoidade" required max='120'> 
            </div>
            <div class="linha">
                <label for="enderecoprof">Endereço</label>
                <input type="text" name="enderecoprof" class="campoendereco" required MAXLENGTH=100>
            </div>

            <div class="linha">
                <label for="cpfprof">CPF</label>
                <input type="text" name="cpfprof" class="campocpf" required MAXLENGTH=11>
            </div>

            <div class="menor">
                <div class="coluna">
                    <label for="dataprof" class="labeldata">Nascimento:</label>
                    <input type="date" name="dataprof" class="camponascimento" required>
                </div>
                <div class="coluna radio">
                <label for="Status_prof">Status:</label>
                    <div class="linharadio">  
                        <label for="Status_prof" id="ativo">Ativo:</label>
                        <input type="radio" name="Status_prof" value="true" required>

                        <label for="Status_prof">Desativo:</label>
                        <input type="radio" name="Status_prof" value="false">
                    </div>
                </div>
            </div>
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