<?php
  
    //require 'connection.php';
    //require 'database.php';
    require 'index.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $data = DBRead('usuarios', "WHERE usuario_login ='".$login."'"); 
    var_dump($data);

    if($data[0]['usuario_login'] == $login && $data[0]["usuario_senha"] == $senha) {
        
        if($login == 'adm' && $senha == 'adm') {
            header("Location: inicio-adm.php");
        } else {
            header("Location: inicio.php");
        }
        
    } else {
        echo "Usuário ou senha incorretos<br>";
    }
    
    
?>