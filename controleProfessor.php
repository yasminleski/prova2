<?php

$nome= $_POST["nome"]; 
$email= $_POST["email"]; 
$login= $_POST["login"]; 
$senha= $_POST["senha"];
$disciplina= $_POST["disciplina"];

include("classeProfessor.php");

$sql = "insert into professores (nome, email, senha, login, disciplina) 
	values ('$nome','$email','$senha','$login','$disciplina')";
	
	echo $sql;
	
?>