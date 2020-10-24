<?php
    if ($_GET){
        if(isset($_GET["resposta"]) && !empty($_GET["resposta"])){
            $reposta = $_GET["resposta"];
            if($reposta=="Sucesso"){
            ?>
                <div class="alert alert-success" role="alert">
                    Produto Inserido com sucesso
                </div>
            <?php
            }elseif($reposta=="Erro"){
            ?>
                <div class="alert alert-danger" role="alert">
                    Erro ao inserir o produto
                </div>
            <?php
            }else{

            }
        }
        if(isset($_GET["id"]) && !empty($_GET["id"])){
            echo $id = $_GET["id"];
            echo "Editar";
        }
    }
?>
<form action="controleProduto.php" method="POST">
    <div class="row">
        <div class="col col-lg-6">
            <h1>Formulário de Cadastro</h1>
            
            <div class="form-group">
                <label for="produto">Nome do Produto:</label>
                <input type="text" class="form-control" id="produto" name="produto">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col col-lg-3">
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade">
            </div>
        </div>
        <div class="col col-lg-3">
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor">
            </div>      
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-6">
            <?php
            if ($id){
                ?>
                <input type="hidden" name='id' value="<?=$id;?>">
                <input type="hidden" name='acao' value="alterar">
                <button type="submit" class="btn btn-primary">ALTERAR</button>
                <?php
            }else{
                ?>
                <input type="hidden" name='acao' value="inserir">
                <button type="submit" class="btn btn-primary">ADICIONAR</button>
                <?php
            }?>
            
        </div>
    </div>
</form>