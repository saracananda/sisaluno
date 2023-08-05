<link rel="stylesheet" href="../styles_sisaluno.css">
<body class="bodyimagem">
    

<div class="blocogeral">

<div class="blocodeopcoes">

<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');

##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nomedisciplina"];
        $professor = $_GET["professordisciplina"];
        $ch = $_GET["ch"];
        $semestre = $_GET["semestre"];
        

        ##codigo SQL
        $sql = "INSERT INTO disciplina(nomedisciplina,idprofessor, ch, semestre) 
                VALUES('$nome','$professor','$ch','$semestre')";

        ##junta o codigo sql com a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);
?>


<?php
        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> <br> A disciplina
                $nome foi incluída com sucesso!!!</div><br>"; 
                echo " <button class='voltar'><a href='../index.php'>VOLTAR</a></button>";
            }
        }
?>


<?php
    #######alterar
    if(isset($_POST['update'])){

        ##dados recebidos pelo metodo POST
        $id = $_POST["id"];
        $nomedisciplina = $_POST["nomedisciplina"];
        $idprofessor = $_POST["professordisciplina"];
        $ch = $_POST["ch"];
        $semestre = $_POST["semestre"];

        ##codigo sql
        $sql = "UPDATE disciplina SET nomedisciplina= :nomedisciplina, idprofessor= :idprofessor, ch= :ch, semestre= :semestre  WHERE id= :id ";

        ##junta o codigo sql a conexao do banco
        $stmt = $conexao->prepare($sql);

        ##diz o paramentro e o tipo  do paramentros
        $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
        $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_INT);
        $stmt->bindParam(':ch',$ch, PDO::PARAM_STR);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->bindParam(':semestre',$semestre, PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> A disciplina
                $nomedisciplina foi alterada com sucesso!!!</div><br>"; 

                echo " <button class='button'><a href='listadisciplina.php'>voltar</a></button>";
            }
    } 
    ##Excluir
    if(isset($_GET['excluir'])){
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $sql ="DELETE FROM `disciplina` WHERE id={$id}";
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        if($stmt->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> <br> A disciplina
                $nome foi excluida!!!</div><br>"; 

                echo " <button class='button'><a href='listadisciplina.php'>Voltar</a></button>";
            }
    }   
?>
</div>
</body>