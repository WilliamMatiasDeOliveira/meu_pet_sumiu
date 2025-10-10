<?php

namespace App\Controllers;

use App\DAO\UserDAO;
use App\Functions\Helpers;
use App\Models\User;

class UserController
{

    public static function create_account_submit()
    {

        $nome = Helpers::sanitaze_input($_POST['nome']);
        $email = Helpers::sanitaze_input($_POST['email']);
        $senha = $_POST['senha'];
        $celular = Helpers::sanitaze_input($_POST['celular']);

        $error = [];

        if (empty($nome)) {
            $error['nome'] = "Este campo é obrigatório";
        }
        if (empty($email)) {
            $error['email'] = "Este campo é obrigatório";
        }
        if (empty($senha)) {
            $error['senha'] = "Este campo é obrigatório";
        }
        if (empty($celular)) {
            $error['celular'] = "Este campo é obrigatório";
        }

        session_start();
        if (!empty($error)) {
            $_SESSION['error'] = $error;
            header("Location: /meu_pet_sumiu/create_account");
            exit;
        }

        $old = [];
        $old['nome'] = $nome;
        $old['email'] = $email;
        $old['celular'] = $celular;
        $_SESSION['old'] = $old;

        $dao = new UserDAO();
        $verify_email = $dao->verify_email($email);

        if($verify_email){
            $error['email_exists'] = "Este e-mail já esta sendo utilizado !";
            $_SESSION['error'] = $error;
            header("Location: /meu_pet_sumiu/create_account");
            exit;
        }

        $user = new User();
        $user->setNome($nome);
        $user->setEmail($email);
        $user->setSenha($senha);
        $user->setCelular($celular);

        $create = $dao->create($user);

        if(!$create){
            header("Location: /meu_pet_sumiu/page404");
            exit;
        }

        header("Location: /meu_pet_sumiu/dashboard");
        exit;
    }
}
