<link rel="stylesheet" href="../styles_sisalun.css">

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
require_once('conexao.php');

    $retorno = $conexao->prepare('SELECT * FROM Aluno');
    $retorno->execute();

?>       
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>NOME</th>
                    <th>IDADE</th>
                    <th>ENDEREÇO</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>STATUS</th>
                    <th></th>
                    <th></th>
                    <!-- <th>STATUS</th> -->
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['id']?> </td> 
                            <td> <?php echo $value['cpf'] ?>   </td> 
                            <td> <?php echo $value['nome']?>  </td> 
                            <td> <?php echo $value['idade']?> </td> 
                            <td> <?php echo $value['endereco']?> </td> 
                            <td> <?php echo $value['datanascimento']?> </td> 
                            <td><?php if($value['statusaluno'] == 'AV'){
                                echo "ATIVO";
                            } else{
                                echo "DESATIVO";
                            }?></td>
                            <!-- <td> <?php /*echo $value['statusaluno']*/?> </td>  -->

                            <td>
                            <form method="POST" action="../aluno/altaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit" class="button">Alterar</button>
                                </form>

                            </td> 

                            <td>
                            <form method="GET" action="../aluno/confirmaexcluir.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name = "excluir" type="submit" class="button button2">Excluir</button>
                                        <?php 
                                        // if($excluir1==true){
                                        //     echo "<h3>Tem certeza que deseja excluir?</h3>";
                                        //     echo "<button name='cancelar'><a href='../aluno/listaaluno.php'>Cancelar</button>";
                                        //     echo "<button name='excluir'  type='submit'>Excluir</button>";
                                        // }
                                        // ?>
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