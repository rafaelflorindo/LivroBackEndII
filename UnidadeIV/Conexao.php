<?php
/*
    abstract class Conexao{
        protected function conectarDB(){
            try{
                return $conectar = new Mysqli("localhost", "root", "", "dbteste");
            }catch(mysqli_sql_exception $e){
                return $e->getMessage();
            }
        }
    }
    */
?>

<?php

abstract class Conexao{
    protected function conectar(){
        try{
            $conn = new PDO("mysql:host=127.0.0.1;dbname=react", "root", "");
            return $conn;
        }catch(PDOException $erro){
            return $erro->getMessage();
        }
    }
}

<?php
require_once('Conexao.php');

class Usuario extends Conexao
{
    private $conectarBd;

    function __construct(){
        if(!($this->conectarBd = $this->conectar())){
            echo $this->erro;
        }
    }

    public function exibirUsuario(){
        $retorno = $this->conectarBd->prepare("SELECT * FROM usuario");
        $retorno->execute();
        
        $results = $retorno->fetchAll(PDO::FETCH_ASSOC);
        
        echo json_encode($results);
    }
}
