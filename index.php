<?php

    
    require_once('./lib/conexao.php');
    require_once('./model/usuarioModel.php');
    require_once('./controller/usuariosController.php');

    $controller = new UsuariosController; 

    $controller->listar();

