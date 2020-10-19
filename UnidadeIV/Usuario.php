<?php
require_once('Conexao.php');

class Usuario extends Conexao{
    protected $conectar;

    function __construct(){
        $this->conectar = $this->conectarDB();
    }
    
    public function listarUsuario(){
        $sql = "SELECT * FROM usuario order by nome ASC";

        $retorno = $this->conectar->query($sql);
        
        $usuarios = array();
        while($linha=$retorno->fetch_assoc()){
            $usuarios[]=$linha;
        }
        return json_encode($usuarios);
    }

    public function buscarUsuario($id){

        $sql = "SELECT * FROM usuario where id = ?";

        $stmt = $this->conectar->prepare($sql);
        $stmt->bind_param("d", $id);
        
        $stmt->execute();

        $results = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return json_encode($results);
    }
}
