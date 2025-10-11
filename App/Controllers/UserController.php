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

        if ($verify_email) {
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

        if (!$create) {
            $fail_create = "Falha ao criar sua conta tente mais tarde !";
            $_SESSION['fail_create'] = $fail_create;
            header("Location: /meu_pet_sumiu/create_account");
            exit;
        }

        $success_create = "Sua conta foi criada com sucesso !";
        $_SESSION['success_create'] = $success_create;
        header("Location: /meu_pet_sumiu/login");
    }

    public static function login_submit()
    {
        $email = Helpers::sanitaze_input($_POST['email']);
        $password = $_POST['senha'];

        $dao = new UserDAO();
        $auth = $dao->login($email, $password);

        if (!$auth) {
            $login_failed = "E-mail ou Senha incorretos !";
            $_SESSION['login_failed'] = $login_failed;
            header("Location: /meu_pet_sumiu/login");
            exit;
        }

        session_start();
        $_SESSION['auth'] = $auth;

        header("Location: /meu_pet_sumiu/dashboard");
        exit;
    }

    public static function logout(){
        session_start();
        unset($_SESSION['auth']);
        header("Location: /meu_pet_sumiu/home");
        exit;
    }
}
