<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="pag8.php" method="post">
                <p id="txtBemvindo">Pergunta 7</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Qual desses não participou da criação do Homem-Aranha?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest7" value="t">
                    <label class="opcao"for="opcao1">Neil Gaiman</label>
                    <input type="radio" id="opcao2" name="quest7" value="f">
                    <label class="opcao"for="opcao2">Stan Lee</label>
                    <input type="radio" id="opcao3" name="quest7" value="f">
                    <label class="opcao"for="opcao3">Steve Ditko</label>
                    <input type="radio" id="opcao4" name="quest7" value="f">
                    <label class="opcao"for="opcao4">Jack Kirby</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>

<?php
	$quest6 = $_POST["quest6"];
	session_start();
	$_SESSION["quest6"] = $quest6;
?>