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
        $nome = $_GET["nomeprof"];
        $idade = $_GET["idadeprof"];
        $cpf = $_GET["cpfprof"];
        $datanasc = $_GET["dataprof"];
        $endereco = $_GET["enderecoprof"];
        $estatus = $_GET["Status_prof"]== 'true'?'1':'0';
        

        ##codigo SQL
        $sql = "INSERT INTO professor(nome,cpf,idade,datanascimento, endereco, estatus) 
                VALUES('$nome', '$cpf','$idade','$datanasc','$endereco', '$estatus')";

        ##junta o codigo sql com a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);
?>


<?php
        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> <br> O professor(a)
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
        $nome = $_POST["nomeprof"];
        $cpf = $_POST["cpfprof"];
        $idade = $_POST["idadeprof"];
        $datanascimento = $_POST["dataprof"];
        $endereco = $_POST["enderecoprof"];
        $estatus = $_POST["Status_prof"] == 'true'?'1':'0';

        ##codigo sql
        $sql = "UPDATE professor SET nome= :nome, cpf= :cpf, idade= :idade, datanascimento= :datanascimento, endereco= :endereco, estatus= :estatus  WHERE id= :id ";

        ##junta o codigo sql a conexao do banco
        $stmt = $conexao->prepare($sql);

        ##diz o paramentro e o tipo  do paramentros
        $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
        $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
        $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
        $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
        $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
        $stmt->execute();

        if($stmt->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> O professor(a)
                $nome foi Alterado com sucesso!!!</div>"; 

                echo " <button class='button'><a href='listaprof.php'>voltar</a></button>";
            }
    } 
    ##Excluir
    if(isset($_GET['excluir'])){
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $sql ="DELETE FROM `professor` WHERE id={$id}";
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        if($stmt->execute())
            {
                echo " <div class='aviso'><strong>OK!</strong> <br> O professor(a)
                $nome foi excluido!!!</div><br>"; 

                echo " <button class='button'><a href='listaprof.php'>Voltar</a></button>";
            }
    }   
?>
</div>
</body>