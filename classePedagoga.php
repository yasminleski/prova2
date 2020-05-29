<?php
class Pedagoga{
    private $id, $nome, $email, $login, $senha, $turmas;
    function __construct()
    {
        include ("conexao.php");
        $conectar = new Conectar();
        $this -> conexao = $conectar->conectar();
    }
    public function addPedagoga ($nome, $email, $login, $senha, $turmas)
      {
        $this->nome=  $nome; 
        $this->email= $email;
        $this->login= $login;
        $this->senha= $senha;
        $this->turmas= $turmas;
        if ($this -> getConexao()){
            echo $query = "INSERT INTO pedagogas (nome, email, login, senha, turmas)
            VALUE ('{$this->getNome()}','{$this->getEmail()}','{$this->getLogin()}','{$this->getSenha()}','{$this->getTurmas()}')";
            $insert = $this -> conexao -> query ($query);
            if ($this -> conexao -> affected_rows){
                return 1;
            } else {
                return 0;
            }   
         }else {
        echo "Não conectado ao Banco de Dados";
    }
    }
}


?>
