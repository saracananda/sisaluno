<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".//styles_sisalun.css">
    <title>SISTEMA DE CONTROLE ACADÊMICO</title>
</head>
<body class="bodyimagem">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<div class="blocogeral">
<div class="blocodeopcoes">
    
    <div id="menu">
    <h2 class="titulodosite">SISTEMA DE CONTROLE ACADÊMICO</h2>
    <br>
    <br>
            <button class="botãoprincipaldomenu" onclick="toggleAluno()">ALUNO</button>
            <button class="botãoprincipaldomenu" onclick="toggleProfessor()">PROFESSOR</button>
        </div>

        <div id="alunoOptions" style="display:none;">
            <button class="buttonsecundario"><a href="../sisaluno/aluno/cadaluno.php"><i class="bi bi-database-fill-add"></i>&ensp; Cadastrar Aluno</a></button>
            <button class="buttonsecundario"><a href="../sisaluno/aluno/listaaluno.php"><i class="bi bi-list-ol"></i>&ensp; Listar Alunos</a></button>
        </div>

        <div id="professorOptions" style="display:none;">
            <button class="buttonsecundario"><a href="../sisaluno/professor/cadprof.php"><i class="bi bi-database-fill-add"></i>&ensp; Cadastrar Professor</a></button>
            <button class="buttonsecundario"><a href="../sisaluno/professor/listaprof.php"><i class="bi bi-database-fill-add"></i>&ensp; Listar Professores</a></button>
        </div>

        <script>
            function toggleAluno() {
                var alunoOptions = document.getElementById("alunoOptions");
                alunoOptions.style.display = (alunoOptions.style.display === "none") ? "block" : "none";

                var professorOptions = document.getElementById("professorOptions");
                professorOptions.style.display = "none";
            }

            function toggleProfessor() {
                var professorOptions = document.getElementById("professorOptions");
                professorOptions.style.display = (professorOptions.style.display === "none") ? "block" : "none";

                var alunoOptions = document.getElementById("alunoOptions");
                alunoOptions.style.display = "none";
            }
        </script>
</div>
</div>
</body>
</html>