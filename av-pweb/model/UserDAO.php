<?php
require_once 'User.php';
require_once 'Database.php';

class UserDAO
{
    public $conexao;

    function __construct()
    {
        $database = new Database();
        $this->conexao = $database->getConexao();
    }

    function create($user)
    {
        $sql = "INSERT INTO usuarios(nome, cpf, senha) VALUES(:name,:cpf, :password)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":name", $user->getName());
        $stmt->bindValue(":cpf", $user->getCpf());
        $stmt->bindValue(":password", $user->getPassword());
        if ($stmt->execute()) {
            return true;
        } else {
            print_r("Erro ao cadastrar usuário");
            return false;
        }
    }

    function fetch()
    {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function edit($user)
    {
        $sql = "UPDATE usuarios SET nome = :name, cpf = :cpf, senha = :password WHERE id = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(":name", $user->getName());
        $stmt->bindValue(":cpf", $user->getCpf());
        $stmt->bindValue(":id", $user->getId());
        $stmt->bindValue(":password", $user->getPassword());
        return $stmt->execute();
    }

    function delete($user)
    {
        $stmt = $this->conexao->prepare("DELETE FROM usuarios  WHERE id = :id");
        $stmt->bindValue(":id", $user->getId());
        return $stmt->execute();
    }
}