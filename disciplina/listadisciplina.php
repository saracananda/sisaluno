<link rel="stylesheet" href="../styles_sisaluno.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body">

<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
require_once('../conexao.php');
    $retorno = $conexao->prepare('SELECT * FROM disciplina');
    $retorno->execute();
?>
    <h2 class="titulolista">LISTA DE DISCIPLINAS</h2>        
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CH</th>
                    <th>PROFESSOR</th>
                    <th>SEMESTRE</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id']?> </td> 
                            <td> <?php echo $value['nomedisciplina']?>  </td> 
                            <td> <?php echo $value['ch']?> </td> 
                            <?php
                                $professor = $conexao->prepare("SELECT nome FROM professor WHERE id={$value['idprofessor']}");
                                $professor->execute();
                                $users = $professor->fetchAll(PDO::FETCH_ASSOC); 
                                $user = $users[0];
                            ?>
                            <td> <?php echo $user['nome'] ?></td>
                            
                            <td> <?php echo $value['semestre']?> </td> 
                            
                            

                            <td>
                            <form method="POST" action="altdisciplina.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit" class="button">Alterar</button>
                            </form>

                            </td> 

                            <td>
                            <form method="GET" action="confirmaexcluir.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <input name="nome" type="hidden" value="<?php echo $value['nomedisciplina'];?>"/>
                                        <button name = "excluir" type="submit" class="button button2">Excluir</button>
                            </form>

                            </td> 


                    
                    </tr>
                    <?php  }  ?> 
                </tr>
            </tbody>
        </table>
<?php         
    echo "<button class='button button3'><a href='../index.php'>voltar</a></button>";
?>
    
</body>
</html>
