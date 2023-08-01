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
        $nome = $_GET["nomealuno"];
        $idade = $_GET["idadealuno"];
        // $cpf = $_GET["cpfaluno"];
        $endereco = $_GET["enderecoaluno"];
        $datanasc = $_GET["dataaluno"];
        $status = $_GET["Status_aluno"];

        // $status = $_GET["Status_aluno"]?'AT':'DS';
        // echo "$status";
        

        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,idade,endereco,datanascimento, estatus) 
                VALUES('$nome','$idade','$endereco','$datanasc', '$status')";

        ##junta o codigo sql com a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);
?>


<?php
        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> <br> O aluno(a)
                $nome foi incluído com sucesso!!!</div><br>"; 
                echo " <button class='voltar'><a href='../index.php'>VOLTAR</a></button>";
            }
        }
?>


<?php
    #######alterar
    if(isset($_POST['update'])){

        ##dados recebidos pelo metodo POST
        $id = $_POST["id"];
        $nome = $_POST["nomealuno"];
        // $cpf = $_POST["cpfaluno"];
        $idade = $_POST["idadealuno"];
        $endereco = $_POST["enderecoaluno"];
        $datanascimento = $_POST["dataaluno"];
        $estatus = $_POST["Status_aluno"];

        ##codigo sql
        $sql = "UPDATE aluno SET nome= :nome, idade= :idade, endereco= :endereco, datanascimento= :datanascimento, estatus= :estatus  WHERE id= :id ";

        ##junta o codigo sql a conexao do banco
        $stmt = $conexao->prepare($sql);

        ##diz o paramentro e o tipo  do paramentros
        $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
        // $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
        $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
        $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
        $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> O aluno
                $nome foi Alterado com sucesso!!!</div><br>"; 

                echo " <button class='button'><a href='listaaluno.php'>voltar</a></button>";
            }
    } 
    ##Excluir
    if(isset($_GET['excluir'])){
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $sql ="DELETE FROM `aluno` WHERE id={$id}";
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        if($stmt->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> <br> O Aluno
                $nome foi excluido!!!</div><br>"; 

                echo " <button class='button'><a href='listaaluno.php'>Voltar</a></button>";
            }
    }   
?>
</div>
</body>