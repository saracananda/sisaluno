<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisaluno.css">
    <title>CADASTRO DE DISCIPLINA</title>

    <script>
        window.onload = function() {
            var selectElement = document.querySelector(".professordisciplina");
            var options = selectElement.options;

            for (var i = 0; i < options.length; i++) {
                options[i].textContent = options[i].textContent.toUpperCase();
            }
        }
    </script>

</head> 
<body class="bodyimagem">

<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');

$professor = $conexao->prepare('SELECT id, nome FROM professor');
$professor->execute();
?>

<div class="blocogeral">
    <div class="blocodeopcoes">
        <form class="form_disciplina" method="GET" action="cruddisciplina.php"> 
            <h2 class="titulodosite">CADASTRO DE DISCIPLINA</h2> 
            <br>
            <div class="campo-dados">
            <div class="linha">
                <label for="nomedisciplina" class= "labellinhamaior">Nome</label>
                <input type="text" name="nomedisciplina" class="camponomedisciplina" required MINLENGTH='2' MAXLENGTH='100'>
            </div>
            <div class="linha">
                <label for="professordisciplina" class= "labellinhamaior">Prof. </label>
                <select name="professordisciplina" class= "professordisciplina">
                    <option value="">Escolha o professor</option>
                    <?php foreach($professor->fetchall() as $value) {?>
                    <option value="<?php echo $value['id']?>"><?php echo strtoupper($value['nome']), ' - ID: ',$value['id']?></option>
                    <?php }?>
                </select>
            </div>
            </div>

            <div class="menor">
                <div class="coluna">
                    <label for="ch">C.H.</label>
                    <input type="text" name="ch" class="campoch" required MINLENGTH='1' MAXLENGTH='3'>
                </div>

                <div class="coluna">
                    <label for="semestre">Semestre</label>
                    <input type="text" name="semestre" class="camposemestre" required MINLENGTH='1' MAXLENGTH='5'>
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