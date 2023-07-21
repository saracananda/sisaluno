CREATE DATABASE siscadastro
DEFAULT CHARACTER SET UTF8
DEFAULT COLLATE UTF8_GENERAL_CI;

USE siscadastro;

CREATE TABLE Professor (
id INT auto_increment primary KEY,
nome VARCHAR(40),
cpf CHAR(14),
idade int,
endereco VARCHAR(40),
datanascimento date,
statusprof bool
);

CREATE TABLE Aluno(
id INT auto_increment primary KEY,
nome VARCHAR(100),
cpf CHAR(14),
idade int,
endereco VARCHAR(100),
datanascimento date,
statusaluno bool
);

ALTER TABLE Aluno
MODIFY statusaluno CHAR(2);

CREATE TABLE Disciplina(
id INT primary key auto_increment,
nomedisciplina VARCHAR(100),
ch VARCHAR(3),
semestre VARCHAR(5),
idprofessor INT
);


 
 
select* from Aluno;
/*SELECT* FROM Aluno;
TRUNCATE TABLE Aluno;*/