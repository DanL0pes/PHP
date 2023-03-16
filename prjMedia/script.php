 <?php
    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $media = ($n1+$n2)/2;
    echo($nome);
    echo("<br>");
    echo($media);
    echo("<br>");
    if($media>=7 && $media<=10){
        echo("Você passou.");
    } else if($media>=5 && $media<=10){
        echo("Você está de recuperação");
    } else if($media>=0 && $media<=10){
        echo("Você foi reprovado.");
    } else{
        echo("Essa nota é inexistente.");
    }
?>