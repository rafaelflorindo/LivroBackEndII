<?php
    require_once('autoLoad.php');
    if (!empty($_POST)) {
        if(isset($_POST['operacao']) && !empty($_POST['operacao'])){
            $operacao = $_POST['operacao'];
        }
        if (isset($_POST['produto']) && isset($_POST['descricao']) && isset($_POST['quantidade']) && isset($_POST['valor'])){
            if (!empty($_POST['produto']) && !empty($_POST['descricao']) && !empty($_POST['quantidade']) && !empty($_POST['valor'])) {
                $dados = json_encode($_POST);
            }
        }
        if($operacao=="inserir"){
            $produto = new Produto();

            $resultado = $produto->adicionarProduto($dados);
            if($resultado) header('location: index.php?resposta=Sucesso&mensagem=Produto inserido com sucesso');
            else header('location: index.php?resposta=Erro&mensagem=Ocorreu um erro ao inserir o produdo');
        }elseif($operacao=="alterar" && isset($_POST['id']) && !empty($_POST['id'])){
            $id = $_POST["id"];
            $produto = new Produto();
            $resultado = $produto->alterarProduto($id, $dados);
            if($resultado) header('location: index.php?resposta=Sucesso&mensagem=Produto alterado com sucesso');
            else header('location: index.php?resposta=Erro&mensagem=Ocorreu um erro ao alterar o produdo');
        }else{
        }
    }elseif (!empty($_GET)) {
        if(isset($_GET['operacao']) && !empty($_GET['operacao'])){
            $operacao = $_GET['operacao'];
        }
        if($operacao=="excluir" && isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET["id"];
            $produto = new Produto();
            $resultado = $produto->excluirProduto($id);
            if($resultado) header('location: index.php?resposta=Sucesso&mensagem=Produto excluído com sucesso');
            else header('location: index.php?resposta=Erro&mensagem=Ocorreu um erro ao excluir o produdo');
        }
    }