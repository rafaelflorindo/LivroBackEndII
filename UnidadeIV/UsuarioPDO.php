<?php
require_once('ConexaoPDO.php');

class Usuario extends ConexaoPDO{
    protected $conectar;
    private $nome, $email, $dataNascimento, $telefone;

    function __construct(){
        $this->conectar = $this->conectarDB();
    }
    function setDados($dados){
        $objCadastro = json_decode($dados);
        $this->nome = $objCadastro->nome;
        $this->email = $objCadastro->email;
        $this->dataNascimento = $objCadastro->dataNascimento;
        $this->telefone = $objCadastro->telefone;
    }
    public function inserirUserPreparado($dados){
        $this->setDados($dados);
        
        $sql = "INSERT INTO usuario (nome, email, dataNascimento, telefone) value 
        (:NOME, :EMAIL, :DATANASCIMENTO, :TELEFONE)";

        $stmt = $this->conectar->prepare($sql);
       
        $results = $stmt->execute(
            array(
                ":NOME"=>$this->nome, 
                ":EMAIL"=>$this->email,
                ":TELEFONE"=>$this->telefone, 
                ":DATANASCIMENTO"=>$this->dataNascimento
             )
            );
        
        $count = $stmt->rowCount();
        if($count > 0) return true;
        else return false;

    }
    public function listarUsuario(){
        $sql = "SELECT * FROM usuario order by nome ASC";

        $stmt = $this->conectar->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
    }

    public function buscarUsuario($id){

        $sql = "SELECT * FROM usuario where id = :ID";

        $stmt = $this->conectar->prepare($sql);
        $stmt->bindParam(":ID", $id);
        
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
    }
    public function editarUserPreparado($id,$dados){
        $this->setDados($dados);
        $this->id=$id;
        $sql = "UPDATE usuario SET nome=:NOME, email=:EMAIL, dataNascimento=:DATANASCIMENTO, telefone=:TELEFONE WHERE id= :ID";
    
        $stmt = $this->conectar->prepare($sql);
       
        $results = $stmt->execute(
            array(
                ":NOME"=>$this->nome, 
                ":EMAIL"=>$this->email,
                ":TELEFONE"=>$this->telefone, 
                ":DATANASCIMENTO"=>$this->dataNascimento,
                ":ID"=>$this->id
             )
            );
        
        $count = $stmt->rowCount();
        if($count > 0) return true;
        else return false;
    }
    public function deletarUserPreparado($id){
        $this->id= $id;
        
        $sql = "DELETE FROM usuario WHERE id= :ID";
    
        $stmt = $this->conectar->prepare($sql);
        $stmt->bindParam(":ID", $this->id);
        $results = $stmt->execute();
        
        $count = $stmt->rowCount();
        if($count > 0) return true;
        else return false;

    }
}
