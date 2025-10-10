<?php

namespace App\Controllers;

class MainController{

    public static function home(){
        require_once VIEWS."/home.php";
    }

    public static function login(){
        require_once VIEWS."/login.php";
    }

    public static function create_account(){
        if($_GET){
            require_once VIEWS."/create_account.php";
        } else {
            if($_POST){
                // require_once VIEWS."/update_account";
            }
        }
    }
}