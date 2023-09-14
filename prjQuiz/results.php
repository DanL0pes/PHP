<?php
$quest10 = $_POST["quest10"];
session_start();
$_SESSION["quest10"] = $quest10;
$acerto = 0;
$erro = 0;

if($_SESSION["quest1"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

if($_SESSION["quest2"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

if($_SESSION["quest3"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

if($_SESSION["quest4"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

if($_SESSION["quest5"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

if($_SESSION["quest6"] == "t"){
    $acerto = $acerto+1;
}else{if($_SESSION["quest1"] == "t")
    $erro = $erro+1;
}

if($_SESSION["quest7"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

if($_SESSION["quest8"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

if($_SESSION["quest9"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

if($_SESSION["quest10"] == "t"){
    $acerto = $acerto+1;
}else{
    $erro = $erro+1;
}

$pAcerto = $acerto*10;
$pErro = $erro*10;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="index.html" method="post">
                <p id="txtBemvindo">Resultados</p>
                <p id="txtBemvindo2">
                    <?php
                        echo ("Acertos: {$acerto}</br>{$pAcerto}%</br></br>");
                        echo ("Erros: {$erro}</br>{$pErro}%");
                    ?>
                </p>
                <br>
                <button name="voltar" type="submit">Voltar</button>
            </form>
        </div>
    </body>
</html>


