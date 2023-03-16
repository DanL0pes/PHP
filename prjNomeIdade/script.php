 <?php
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    
    echo($nome);
    echo("<br>");
    echo($idade);
    echo("<br>");
    if($idade>=18){
        echo("Você é maior da idade.");
    } else {
        echo("Você é menor da idade.");
    }
?>