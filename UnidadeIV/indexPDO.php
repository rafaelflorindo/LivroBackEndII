<?php
    require_once('UsuarioPDO.php');

    $usuario = new Usuario();

/*    $dados=[
        'nome' => 'Rafael Vanso',
        'email'  =>  'vanso@hotmail.com',
        'dataNascimento'  => '2010-10-12',
        'telefone'  =>  '(48) 98754-5825'
    ];
    $dados = json_encode($dados);
    echo $addUsuario2 = $usuario->inserirUserPreparado($dados);
    echo "<h2>Busca e Usuário:</h2>";


    echo "<h2>Listar Usuário:</h2>";
    $listaUsuarios = $usuario->listarUsuario();

    echo $listaUsuarios;

    echo "<h2>Busca e Usuário:</h2>";
    $buscaUsuario = $usuario->buscarUsuario(1);
    echo $buscaUsuario;
    */
    
    $id = 8;
    $dados=[
        'nome' => 'Tania Vanso',
        'email'  =>  'vanso@hotmail.com',
        'dataNascimento'  => '2010-10-12',
        'telefone'  =>  '(48) 98754-5825'
    ];
    $dados = json_encode($dados);
    echo $editarUsuario2 = $usuario->editarUserPreparado($id, $dados);
    echo "<h2>Busca e Usuário:</h2>";
   
    $id = 8;
    echo $excluirUsuario2 = $usuario->deletarUserPreparado($id);
    echo "<h2>Busca e Usuário:</h2>";