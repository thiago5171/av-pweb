<?php
require_once 'model/User.php';
require_once 'model/UserDAO.php';

class UserController
{
    private $user;
    private $userDAO;

    function create()
    {
        $this->user = new User();
        $this->userDAO = new UserDAO();
        $this->user->setName($_REQUEST["nome"]);
        $this->user->setCpf($_REQUEST["cpf"]);
        $this->user->setPassword($_REQUEST["password"]);
        if ($this->userDAO->create($this->user)) {
            $_REQUEST['sucesso'] = true;
            $_REQUEST['userNome'] = $this->user->getName();
            require_once 'view/user/create.php';
        } else {
            echo 'Erro ao criar usuário';
        }
    }

    function fetch()
    {
        $this->userDAO = new UserDAO();
        $_REQUEST['userLista'] = $this->userDAO->fetch();
        require_once 'view/user/listar.php';

    }

    function getById()
    {
        $this->userDAO = new UserDAO();
        $this->user = new User();
        $this->user->setId($_REQUEST["id"]);
        if ($this->user = $this->userDAO->getById($this->user->getId())) {

            $_REQUEST['userExibir'] = $this->user;
            require_once 'view/user/editar.php';
        } else {
            echo 'Erro ao retornar usuario';
        }
    }

    function edit()
    {
        $this->userDAO = new UserDAO();
        $this->user = new User();
        $this->user->setId($_REQUEST["id"]);
        $this->user->setName($_REQUEST["nome"]);
        $this->user->setCpf($_REQUEST["cpf"]);
        $this->user->setPassword($_REQUEST["password"]);
        if ($this->userDAO->edit($this->user)) {
            echo 'usuario editada com sucesso';
        } else {
            echo 'Erro ao editar usuario';
        }
    }
    public function delete()
    {
        $this->user = new User();
        $this->userDAO = new UserDAO();
        $this->user->setId($_REQUEST['id']);
        if ($this->userDAO->delete($this->user)) {
            echo 'usuario deletado com sucesso';
        } else {
            echo 'Erro ao deletar usuario';
        }
    }
}

