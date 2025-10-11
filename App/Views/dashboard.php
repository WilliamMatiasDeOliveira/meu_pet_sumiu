<?php
    $title = "Dashboard";
    require_once "Layouts/header.php";
    require_once "Layouts/nav.php";

    if(isset($_SESSION['auth'])){
        $auth = $_SESSION['auth'];
    }
?>