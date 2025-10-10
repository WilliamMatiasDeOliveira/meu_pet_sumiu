<?php

namespace App\Controllers;

use App\DAO\UserDAO;
use App\Functions\Helpers;
use App\Models\User;

class UserController{

    public static function create_account_submit(){

        $nome = Helpers::sanitaze_input($_POST['nome']);
        $email = Helpers::sanitaze_input($_POST['email']);
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $celular = Helpers::sanitaze_input($_POST['celular']);

        $dao = new UserDAO();
        $dao->verify_create_account($email);

        if(!$dao){
            $email_exists = "Este E-mail já esta sendo utilizado !";
            $_SESSION['email_exists'] = $email_exists;
            header("Location: /meu_pet_sumiu/create_account");
            exit;
        }

        $user = new User();
        $user->setNome($nome);
        $user->setEmail($email);
        $user->setSenha($senha);
        $user->setCelular($celular);

        


    }
}