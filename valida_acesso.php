<?php

    session_start();

    require_once('Db.class.php');

    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT id, usuario, email FROM usuarios WHERE  email = '$usuario' AND senha = '$senha'";

    $obj = new db();

    $link = $obj->conecta_mysql();

    $resulta_id = mysqli_query($link, $sql);

    if($resulta_id){
        $dados_usuario = mysqli_fetch_array($resulta_id);
        
        if(isset($dados_usuario['usuario'])){

            $_SESSION['id_usuario'] = $dados_usuario['id'];
            $_SESSION['usuario'] = $dados_usuario['usuario'];
            $_SESSION['email'] = $dados_usuario['email'];

            header('Location: admin/index.php');
        }else{
            header('Location: /index.php?erro=1');
        }
    }else{
        echo 'Erro na execução da consulta, favor entrar em contato com o administrador do sistema!';
    }