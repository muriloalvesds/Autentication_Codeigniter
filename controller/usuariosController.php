<?php

class UsuariosController{

    public function __construct(){

    }

    public function listar(){

        // Buscar usuarios no banco -- usuariosModel
        $usuarios = new UsuarioModel;

        $usuarios->getUsuarios();

        require_once("view/listUsuarios.php");

        // Processar a lista de usuarios 

        // Invocar Saida Visual -- view/listaUsuarios
    }
}

