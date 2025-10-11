<?php

use App\Controllers\MainController;
use App\Controllers\UserController;

$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = str_replace("/meu_pet_sumiu", "", $route);

switch ($route) {
    case "/":
        MainController::home();
        break;
    case "/login":
        MainController::login();
        break;
    case "/login_submit":
        UserController::login_submit();
        break;
    case "/create_account":
        MainController::create_account();
        break;
    case "/create_account_submit":
        UserController::create_account_submit();
        break;
    case "/dashboard":
        MainController::dashboard();
        break;






    // case "page404":
    //     echo "erro na inserção";
    //     break;
}
