<?php
include('autoLoad.php');
    if ($_GET){
        if(isset($_GET["resposta"]) && !empty($_GET["resposta"]) && isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
            $reposta = $_GET["resposta"];
            $mensagem = $_GET["mensagem"];
            if($reposta=="Sucesso"){
            ?>
                <div class="alert alert-success" role="alert">
                    <?=$mensagem;?>
                </div>
            <?php
            }elseif($reposta=="Erro"){
            ?>
                <div class="alert alert-danger" role="alert">
                    <?=$mensagem;?>
                </div>
            <?php
            }else{
             ?>
                <div class="alert alert-warning" role="alert">
                    Algo de errado com a Aplicação
                </div>
            <?php   
            }
        }
        if(isset($_GET["acao"]) && !empty($_GET["acao"])){
            $acao = $_GET["acao"];
            if($acao == "editar"){
                if(isset($_GET["id"]) && !empty($_GET["id"])){
                    $id = $_GET["id"];
                    $produto = new Produto();
                    $resgatarProduto = $produto->carregarProduto($id);
                }
            }elseif($acao == "inserir"){
                $acao = $_GET["acao"];
            }else{
            }           
        }else{
        }
    }
    if($acao==""){
        $resgatarProduto=array("produto"=>"","descricao"=>"","quantidade"=>"", "valor"=>"");
    }
?>
<form action="controleProduto.php" method="POST">
    <div class="row">
        <div class="col col-lg-6">
            <h1>Formulário</h1>
            
            <div class="form-group">
                <label for="produto">Nome do Produto:</label>
                <input type="text" class="form-control" id="produto" name="produto" value="<?=$resgatarProduto["produto"];?>">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="<?=$resgatarProduto["descricao"];?>">
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col col-lg-3">
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" value="<?=$resgatarProduto["quantidade"];?>">
            </div>
        </div>
        <div class="col col-lg-3">
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor" value="<?=$resgatarProduto["valor"];?>">
            </div>      
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-6">
            <?php
            if ($acao=="editar"){
                ?>
                <input type="hidden" name='id' value="<?=$id;?>">
                <input type="hidden" name='operacao' value="alterar">
                <button type="submit" class="btn btn-primary">ALTERAR</button>
                <?php
            }else{
                ?>
                <input type="hidden" name='operacao' value="inserir">
                <button type="submit" class="btn btn-primary">ADICIONAR</button>
                <?php
            }?>
            
        </div>
    </div>
</form>
