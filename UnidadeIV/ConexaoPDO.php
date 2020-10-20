<?php
    abstract class ConexaoPDO{
        protected function conectarDB(){
            try{
                return $conectar = new PDO("mysql:host=localhost;dbname=dbteste", "root", "");
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>