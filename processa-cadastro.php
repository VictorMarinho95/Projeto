<?php

    require 'connection.php';
    require 'database.php';
    require 'config.php';

    $arr = [];
            
            $arr['usuario_nome'] = $_POST['nome'];
            $arr['usuario_email'] = $_POST['email'];
            $arr['usuario_login'] = $_POST['login'];
            $arr['usuario_senha'] = $_POST['senha'];

var_dump($arr);

    $grava = DBCreate('usuarios', $arr);

    if($grava) {
        echo 'OK!';
    } else {
        echo ':/';
    }

?>