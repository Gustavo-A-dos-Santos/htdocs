<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once "../../controllers/UsuarioController.php";

    $UsuarioController = new UsuarioController();

    $res = $UsuarioController->remove($_GET['id']);

    if($res){
        header("location: ./");
        exit();
    }
}