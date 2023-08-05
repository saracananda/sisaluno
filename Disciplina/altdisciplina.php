<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles_sisaluno.css">
    <title>Alterar disciplina</title>
</head>
<body class="bodyimagem">

<?php
    require_once('../conexao.php');

    $id = $_POST['id'];

    ##sql para selecionar apens um professor
   $sql = "SELECT * FROM disciplina where id= :id";
    
    # junta o sql a conexao do banco
    $retorno = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $retorno->bindParam(':id',$id, PDO::PARAM_INT);

    #executa a estrutura no banco
    $retorno->execute();

    #transforma o retorno em array
    $array_retorno=$retorno->fetch();
    
    ##armazena retorno em variaveis
    $nome = $array_retorno['nomedisciplina'];
    $idprof = $array_retorno['idprofessor'];
    $ch = $array_retorno['ch'];
    $semestre = $array_retorno['semestre'];

    ##sql para selecionar o nome do professor atual
    $sql = "SELECT nome FROM professor where id= :idprof";
    
    $profatual = $conexao->prepare($sql);
    $profatual->bindParam(':idprof',$idprof, PDO::PARAM_INT);
    $profatual->execute();
    $array_profatual=$profatual->fetch();
    $nomeprofatual = $array_profatual['nome'];

    $professor = $conexao->prepare('SELECT id, nome FROM professor');
    $professor->execute();


?>
<div class="blocogeral">
    <div class="blocodeopcoes">
        <form class="form_disciplina" method="POST" action="cruddisciplina.php"> 
        <h2 class="titulodosite">ALTERE OS DADOS DA DISCIPLINA</h2> 

            <input type="hidden" name="id" id="" value=<?php echo $id ?> >
            
            <div class="campo-dados">
            <div class="linha">
                <label for="nomedisciplina" class= "labellinhamaior">Nome</label>
                <input type="text" name="nomedisciplina" class="camponomedisciplina" value="<?php echo htmlspecialchars($nome)?>"  required MINLENGTH='2' MAXLENGTH='100'>
            </div>
            <div class="linha">
                <label for="professordisciplina" class= "labellinhamaior">Prof. </label>
                <select name="professordisciplina" class= "professordisciplina" required>
                    <option value="<?php echo $idprof?>"><?php echo $nomeprofatual, ' - ID: ',$idprof?></option>
                    <?php foreach($professor->fetchall() as $value) {?>
                    <option value="<?php echo $value['id']?>"><?php echo strtoupper($value['nome']), ' - ID: ',$value['id']?></option>
                    <?php }?>
                </select>   
            </div>
            </div>

            <div class="menor">
                <div class="coluna">
                    <label for="ch">C.H.</label>
                    <input type="text" name="ch" class="campoch" value="<?php echo $ch ?>" required MINLENGTH='1' MAXLENGTH='3'>
                </div>

                <div class="coluna">
                    <label for="semestre">Semestre</label>
                    <input type="text" name="semestre" class="camposemestre" value="<?php echo $semestre ?>" required MINLENGTH='1' MAXLENGTH='5'>
                </div>
                
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