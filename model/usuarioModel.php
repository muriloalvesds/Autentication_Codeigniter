<?php

    class UsuarioModel extends Conexao{

        public $lista;

        public function __construct(){

        }

        public function getUsuarios(){

            $query = "SELECT du.nome as nm_usuario, dg.nome as nm_grupo
                      FROM desc_grupos dg
                      JOIN desc_usuarios_grupos dug
                      on dg.id = dug.id
                      JOIN desc_usuarios du 
                      on dug.id=dg.id";

            $this->lista = $this->executar($query);

          
        // var_dump( $this->lista );
            // executar a query

            // retornar o resultado da consulta
        }
    }
?>