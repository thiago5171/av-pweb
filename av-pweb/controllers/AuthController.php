<?php
require_once 'model/Auth.php';
require_once 'model/AuthDAO.php';

class AuthController
{
    private $auth;
    private $authDAO;

    function login()
    {
        $this->auth = new Auth();
        $this->authDAO = new AuthDAO();
        $this->auth->setCpf($_REQUEST["cpf"]);
        $this->auth->setPassword($_REQUEST["password"]);
        if($this->authDAO->login($this->auth)){
            $_REQUEST['sucesso'] = true;
            require_once 'view/user/acess.php';


        }else{
            echo "usuario não existe, cadastre um novo usuario";
        }
    }

}