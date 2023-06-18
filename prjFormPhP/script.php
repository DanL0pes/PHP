<?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $senha = $_POST['senha'];
    $escolha = $_POST['escolha'];
    $estados = $_POST['estados'];
    $observacoes = $_POST['observacoes'];
    $interesse = null;

    echo "<h2>Nome:</h2> <p>".$nome;
    echo "<h2>Email:</h2> <p>".$email;
    echo "<h2>Idade:</h2> <p>".$idade;
    echo "<h2>Senha:</h2> <p>".$senha; 
    echo "<h2>Sexo:</h2> <p>" .$_POST["escolha"];

    // Interesses - CheckBox
    echo "<h2>Interesses: </h2>";
    if(isset($_POST['ckInteresse']))
        $interesse = $_POST['ckInteresse'];
    if($interesse !== null){
        for($i = 0; $i < count($interesse); $i++){
            echo "<p>{$interesse[$i]}</p>";
        }
    }
    

    // Estados - Select
    $estados = isset($_POST['estados']) ? $_POST['estados'] : false;
    if ($estados) {
        echo "<h2>Estado: </h2><p>";
        echo htmlentities($_POST['estados'], ENT_QUOTES, "UTF-8");
    } else {
        echo "<h2>Estado: </h2><p>Opção não informada.";
    }

    echo "<h2>Aqui  esão suas observaçoes: </h2> <p>" .$observacoes;
?> 


