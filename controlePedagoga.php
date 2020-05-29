<?php

$nome= $_POST["nome"]; 
$email= $_POST["email"]; 
$login= $_POST["login"]; 
$senha= $_POST["senha"];
$turmas= $_POST["turmas"];

include("classePedagoga.php");

$sql = "insert into professores (nome, email, senha, login, turmas) 
	values ('$nome','$email','$senha','$login','$turmas')";
	
	echo $sql;
	
?>