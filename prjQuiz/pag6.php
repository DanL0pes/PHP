<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="pag7.php" method="post">
                <p id="txtBemvindo">Pergunta 6</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Quando foi lançado a primeira HQ do Homem-Aranha?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest6" value="f">
                    <label class="opcao"for="opcao1">1966</label>
                    <input type="radio" id="opcao2" name="quest6" value="f">
                    <label class="opcao"for="opcao2">1968</label>
                    <input type="radio" id="opcao3" name="quest6" value="t">
                    <label class="opcao"for="opcao3">1962</label>
                    <input type="radio" id="opcao4" name="quest6" value="f">
                    <label class="opcao"for="opcao4">1970</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>

<?php
	$quest5 = $_POST["quest5"];
	session_start();
	$_SESSION["quest5"] = $quest5;
?>