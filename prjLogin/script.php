 <?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($usuario==123 && $senha==123){
        header('location: galeria.html');
    } else {
        header('location: index.html');
    }