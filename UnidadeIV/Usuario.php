<?php
require_once('Conexao.php');

class Usuario extends Conexao{
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
    public function inserirUsuario($dados){
        $this->setDados($dados);
        
        $sql = "INSERT INTO usuario (nome, email, dataNascimento, telefone) 
        value ('$this->nome','$this->email', '$this->dataNascimento', '$this->telefone')";

        $retorno = $this->conectar->query($sql);
        if ($retorno)
            return 1;
        else    
            return 0;
    }
    public function editarUsuario($id, $dados){
        $this->id = $id;
        $this->setDados($dados);
        
        echo $sql = "UPDATE usuario SET nome = '$this->nome', email='$this->email', dataNascimento='$this->dataNascimento', telefone='$this->telefone' WHERE id = '$this->id'";

        $retorno = $this->conectar->query($sql);
        if ($retorno)
            return 1;
        else    
            return 0;
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
    public function deletarUsuario($id){
        $this->id = $id;

        $sql = "DELETE FROM usuario WHERE id = $this->id";

        $retorno = $this->conectar->query($sql);
        if ($retorno)
            return 1;
        else    
            return 0;
    }

    public function inserirUserPreparado($dados){
        $this->setDados($dados);
        
        $sql = "INSERT INTO usuario (nome, email, dataNascimento, telefone) value (?, ?, ?, ?)";

        $stmt = $this->conectar->prepare($sql);
        $stmt->bind_param("ssss", $this->nome, $this->email, $this->dataNascimento, $this->telefone);
        $results = $stmt->execute();
        
        if ($results > 0)
            return 1;
        else
            return 0;

    }
    public function editarUsuarioPreparado($id, $dados){
        $this->id = $id;
        $this->setDados($dados);
        
        $sql = "UPDATE usuario SET nome = ?, email=?, dataNascimento=?, telefone=? WHERE id = ?";

        $stmt = $this->conectar->prepare($sql);
        $stmt->bind_param("ssssd", $this->nome, $this->email, $this->dataNascimento, $this->telefone, $this->id);
        $results = $stmt->execute();
        
        if ($results > 0)
            return 1;
        else
            return 0;
    }
    public function deletarUsuarioPreparado($id){
        $this->id = $id;
        $sql = "DELETE FROM usuario WHERE id = ?";
        
        $stmt = $this->conectar->prepare($sql);
        $stmt->bind_param("d", $id);
        
        $results = $stmt->execute();
        if ($results > 0)
            return 1;
        else
            return 0;
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
