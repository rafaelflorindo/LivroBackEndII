<?php
    require_once('Usuario.php');
    require_once('Conexao.php');

    $usuario = new Usuario();
    echo "<h2>Listar Usuário:</h2>";
    $listaUsuarios = $usuario->listarUsuario();

    echo $listaUsuarios;

    echo "<h2>Busca e Usuário:</h2>";
    $buscaUsuario = $usuario->buscarUsuario(2);
    echo $buscaUsuario;