<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_sisaluno.css">
    <title>SISTEMA DE CONTROLE ACADÊMICO</title>
</head>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> -->
<body class="bodyimagem">
<div class="blocogeral">
<div class="blocodeopcoes">
    
    <div id="menu">
    <h2 class="titulodosite">SISTEMA DE CONTROLE ACADÊMICO</h2>
    <br>
    <br>
            <button class="botãoprincipaldomenu" onclick="toggleAluno()">ALUNO</button>
            <button class="botãoprincipaldomenu" onclick="toggleProfessor()">PROFESSOR</button>
            <button class="botãoprincipaldomenu" onclick="toggleDisciplina()">DISCIPLINA</button>
        </div>

        <div id="alunoOptions" style="display:none;">
            <button class="buttonsecundario"><a href="aluno/cadaluno.php">Cadastrar Aluno</a></button>
            <button class="buttonsecundario"><a href="aluno/listaaluno.php"><i class="bi bi-list-ol"></i>&ensp; Listar Alunos</a></button>
        </div>

        <div id="professorOptions" style="display:none;">
            <button class="buttonsecundario"><a href="professor/cadprof.php">Cadastrar Professor</a></button>
            <button class="buttonsecundario"><a href="professor/listaprof.php">Listar Professores</a></button>
        </div>

        <div id="disciplinaOptions" style="display:none;">
            <button class="buttonsecundario"><a href="disciplina/caddisciplina.php">Cadastrar Disciplina</a></button>
            <button class="buttonsecundario"><a href="disciplina/listadisciplina.php">Listar Disciplinas</a></button>
        </div>

        <script>
            function toggleAluno() {
                var alunoOptions = document.getElementById("alunoOptions");
                alunoOptions.style.display = (alunoOptions.style.display === "none") ? "block" : "none";

                var professorOptions = document.getElementById("professorOptions");
                professorOptions.style.display = "none";

                var disciplinaOptions = document.getElementById("disciplinaOptions");
                disciplinaOptions.style.display = "none";
            }

            function toggleProfessor() {
                var professorOptions = document.getElementById("professorOptions");
                professorOptions.style.display = (professorOptions.style.display === "none") ? "block" : "none";

                var alunoOptions = document.getElementById("alunoOptions");
                alunoOptions.style.display = "none";

                var disciplinaOptions = document.getElementById("disciplinaOptions");
                disciplinaOptions.style.display = "none";
            }

            function toggleDisciplina() {
                var disciplinaOptions = document.getElementById("disciplinaOptions");
                disciplinaOptions.style.display = (disciplinaOptions.style.display === "none") ? "block" : "none";

                var professorOptions = document.getElementById("professorOptions");
                professorOptions.style.display = "none";

                var alunoOptions = document.getElementById("alunoOptions");
                alunoOptions.style.display = "none";
            }
        </script>
</div>
</div>
</body>
</html>
