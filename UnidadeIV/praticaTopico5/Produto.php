<?php
include('Conexao.php');
class Produto extends Conexao{
    private $id, $produto, $descricao, $quantidade, $valor;
    private $conn;

    public function __construct(){
        $this->conn = $this->conectarDB();
    }
    private function setDados($dados){
        $dados = json_decode($dados);
        $this->produto = $dados->produto;
        $this->descricao = $dados->descricao;
        $this->quantidade = $dados->quantidade;
        $this->valor = $dados->valor;
    }

    public function adicionarProduto($dados):bool{
        $this->setDados($dados);
        try{
            $stmt = $this->conn->prepare("INSERT INTO produto (produto, descricao, quantidade, valor) VALUES (:PRODUTO,:DESCRICAO,:QUANTIDADE,:VALOR)");
            $stmt->execute(
            array(
                ':PRODUTO'=>$this->produto,
                ':DESCRICAO'=>$this->descricao,
                ':QUANTIDADE'=>$this->quantidade,
                ':VALOR'=>$this->valor)
            );
            $count = $stmt->rowCount();
            return $count ? true: false;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function alterarProduto($id, $dados):bool{
        $this->id = $id;
        $this->setDados($dados);
        
        try{
            $stmt = $this->conn->prepare("
            UPDATE produto SET 
            produto = :PRODUTO, 
            descricao = :DESCRICAO, 
            quantidade = :QUANTIDADE, 
            valor = :VALOR
            WHERE id = :ID");
            $stmt->execute(
            array(
                ':PRODUTO'=>$this->produto,
                ':DESCRICAO'=>$this->descricao,
                ':QUANTIDADE'=>$this->quantidade,
                ':VALOR'=>$this->valor,
                ':ID'=>$this->id)
            );
            $count = $stmt->rowCount();
            return $count ? true: false;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function excluirProduto($id):bool{
        $this->id = $id;
        try{
            $stmt = $this->conn->prepare("
            DELETE FROM produto 
            WHERE id = :ID");
            $stmt->bindParam(':ID', $this->id);
            $stmt->execute();
            $count = $stmt->rowCount();
            return $count ? true: false;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function exibirProdutos(){
        try{
            $stmt = $this->conn->prepare("
            SELECT * FROM produto ORDER BY produto ASC");
            $stmt->execute();
            
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $results;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function carregarProduto($id){
        $this->id = $id;
        try{
            $stmt = $this->conn->prepare("SELECT * FROM produto WHERE id = :ID");
            $stmt->bindParam(':ID', $this->id);
            $stmt->execute();
            
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            /*if(count($results) > 0){
                $this->setDados($results[0]);
            }*/
            return $results[0];
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}