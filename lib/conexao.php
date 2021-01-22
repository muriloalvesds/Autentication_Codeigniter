<?php
require_once('./config.php');

abstract class Conexao extends Config{

    

    protected function executar($query){
        $connection=mysqli_connect( $this->db_endereco,$this->db_usuario,$this->db_senha,$this->db_banco);

        try{
            if (mysqli_connect_errno())
            {
                throw new Exception("Falha ao conectar ao MySQL: " . mysqli_connect_error());
            }

            $result = mysqli_query($connection, $query);

            if($result == false){
                throw new Exception(mysqli_error($connection)) ;
            }

            mysqli_close($connection);

            return $result;

        }catch(Exception $e){
            echo $e->getMessage();
            mysqli_close($connection);
            die;

        }
       

       


    }

}