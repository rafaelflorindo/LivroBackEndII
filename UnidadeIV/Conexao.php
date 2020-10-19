<?php
    abstract class Conexao{
        protected function conectarDB(){
            try{
                return $conectar = new Mysqli("localhost", "root", "", "dbteste");
            }catch(mysqli_sql_exception $e){
                return $e->getMessage();
            }
        }
    }
?>