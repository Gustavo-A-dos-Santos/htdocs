<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once "../../controllers/JogosController.php";

    $JogosController = new JogosController();

    $res = $JogosController->remove($_GET['id']);

    if($res){
        header("location: ./");
        exit();
    }
}