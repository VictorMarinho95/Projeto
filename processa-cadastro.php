<?php

    require 'connection.php';
    require 'database.php';
    require 'config.php';

    $arr = [];
            
            $arr['usuario_nome'] = $_POST['nome'];
            $arr['usuario_email'] = $_POST['email'];
            $arr['usuario_login'] = $_POST['login'];
            $arr['usuario_senha'] = $_POST['senha'];

    $arrDados = [];

            $arrDados['usuario_cpf'] = $_POST['cpf'];
            $arrDados['usuario_data_nasc'] = $_POST['data-nascimento'];

    $arrEndereco = [];

        $arrEndereco['endereco_numero'] = $_POST['numero'];
        $arrEndereco['endereco_complemento'] = $_POST['complemento'];
        $arrEndereco['endereco_referencia'] = $_POST['referencia'];
        
    $arrRua['rua_nome'] = $_POST['rua'];

    $arrBairro['bairro_nome'] = $_POST['bairro'];

    $arrCidade['cidade_nome'] = $_POST['cidade'];

    $arrUF['uf_nome'] = $_POST['uf'];

    $arrSexo['sexo_usuario'] = $_POST['sexo'];

    $arrTelefone = [];
    
        $arrTelefone['telefone_residencial'] = $_POST['telefone-residencial'];
        $arrTelefone['telefone_celular'] = $_POST['telefone-celular'];



    $grava = DBCreate('usuarios', $arr);

    if($grava) {
        echo 'USUÁRIO OK!';
    } else {
        echo ':/';
    }

    $gravaEndereco = DBCreate('enderecos', $arrEndereco);

       if($gravaEndereco) {
        echo 'ENDERECO OK!';
    } else {
        echo ':/';
    }

    $gravaDados = DBCreate('dados_pessoais', $arrDados); 

       if($gravaDados) {
        echo 'DADOS OK!';
    } else {
        echo ':/';
    }
    

    $gravaTelefone = DBCreate('telefones', $arrTelefone);

     if($gravaTelefone) {
        echo 'TELEFONE OK!';
    } else {
        echo ':/';
    }

    $gravaRua = DBCreate('ruas', $arrRua);

    if($gravaRua) {
        echo 'RUA OK!';
    } else {
        echo ':/';
    }

    $gravaBairro = DBCreate('bairros', $arrBairro);

        if($gravaBairro) {
            echo 'BAIRRO OK!';
        } else {
            echo ':/';
        }

    $gravaCidade = DBCreate('cidades', $arrCidade);

        if($gravaCidade) {
        echo 'CIDADE OK!';
    } else {
        echo ':/';
    }

    $gravaUf = DBCreate('ufs', $arrUF);

         if($gravaUf) {
            echo 'UF OK!';
        } else {
            echo ':/';
        }

    $gravaSexo = DBCreate('sexos', $arrSexo);
    
    if($gravaSexo) {
        echo 'SEXO OK!';
    } else {
        echo ':/';
    }




?>