<?php
require_once 'Auth.php';

require_once 'Database.php';

class  AuthDAO
{
    public $conexao;

    function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConexao();
    }
    function login($user){
        $sql = "SELECT * FROM usuarios WHERE cpf = :cpf AND senha = :password";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":cpf", $user->getCpf());
        $stmt->bindValue(":password", $user->getPassword());
        $stmt->execute();
        if(count($stmt->fetchAll())>0) {
            return true;
        }
        return false;
    }
}