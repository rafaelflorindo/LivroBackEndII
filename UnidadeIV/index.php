<?php
    require_once('Usuario.php');
    require_once('Conexao.php');

    $usuario = new Usuario();
    $dados=[
        'nome' => 'Carlos Fernades',
        'email'  =>  'josefernades@hotmail.com',
        'dataNascimento'  => '2010-10-12',
        'telefone'  =>  '(48) 98754-5825'
    ];
    $dados = json_encode($dados);
    $addUsuarios = $usuario->inserirUsuario($dados);
    echo $addUsuarios;
    echo "<h2>Listar Usuário:</h2>";
    $listaUsuarios = $usuario->listarUsuario();
    echo $listaUsuarios;

    $dados=[
        'nome' => 'Felipe Fernades',
        'email'  =>  'josefernades@hotmail.com',
        'dataNascimento'  => '2010-10-12',
        'telefone'  =>  '(48) 98754-5825'
    ];
    $dados = json_encode($dados);
    echo $addUsuario2 = $usuario->inserirUserPreparado($dados);
    echo "<h2>Busca e Usuário:</h2>";
    $buscaUsuario = $usuario->buscarUsuario(2);
    echo $buscaUsuario;