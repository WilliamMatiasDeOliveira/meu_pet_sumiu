<?php

$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = str_replace("/meu_pet_sumiu", "", $route);

switch($route){
    
}