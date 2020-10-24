<div class="container">
    <div class="row">
        <div class="col col-lg-12">
            <div class="table-responsive-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ITEM</th>
                            <th scope="col">PRODUTO</th>
                            <th scope="col">DESCRIÇÃO</th>
                            <th scope="col">QUANTIDADE</th>
                            <th scope="col">VALOR</th>
                            <th scope="col">AÇÃO</th>
                        </tr>
                    </thead>
                    <?php
                        include('autoLoad.php');
                        $produtos = new Produto();
                        $retorno = $produtos->exibirProdutos();
                        $i=1;
                        foreach($retorno as $linha){
                        ?>
                        <tr>
                            <th scope="row"><?=$i++?></th>
                            <td><?=$linha['produto'];?></td>
                            <td><?=$linha['descricao'];?></td>
                            <td><?=$linha['quantidade'];?></td>
                            <td><?=number_format($linha['valor'], 2, ',', '.');?></td>
                            <td>
                            <a class="btn btn-primary" href="?acao=editar&id=<?=$linha['id']?>" role="button">EDITAR</a>
                            <a class="btn btn-danger" href="controleProduto.php?operacao=excluir&id=<?=$linha['id']?>" role="button">EXCLUIR</a>
                            </td>
                        </tr>
                        <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>