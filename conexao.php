<?php
Class Conectar
{
    private $host, $usuario, $senha, $database;
    private $conectar;

    function __construct(){
	$local = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "escola.sql";
    $conectar = new mysqli($local, $usuario, $senha, $database);
   
    }
    public function conectar(){
      $this->conectar = new Mysqli($this->host,
      $this->usuario,
      $this->senha,
      $this->database,);
      return $this->getConectar();
    }
    public function getConectar(){
        return $this->conectar;
    }
    }
    ?>