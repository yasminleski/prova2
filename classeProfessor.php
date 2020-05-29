<?php
class Professor{
    private $id, $nome, $email, $login, $senha, $discliplina;
    function __construct()
    {
        include ("conexao.php");
        $conectar = new Conectar();
        $this -> conexao = $conectar->conectar();
    }
    public function addProfessor ($nome, $email, $login, $senha, $disciplina)
      {
        $this->nome=  $nome; 
        $this->email= $email;
        $this->login= $login;
        $this->senha= $senha;
        $this->disciplina= $disciplina;
        if ($this -> getConexao()){
            echo $query = "INSERT INTO professores (nome, email, login, senha, disciplina)
            VALUE ('{$this->getNome()}','{$this->getEmail()}','{$this->getLogin()}','{$this->getSenha()}','{$this->getDisciplina()}')";
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
