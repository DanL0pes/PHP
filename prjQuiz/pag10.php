<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="results.php" method="post">
                <p id="txtBemvindo">Pergunta 10</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Qual destes Homem-Aranhas possui teia orgânica?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest10" value="f">
                    <label class="opcao"for="opcao1">Andrew Garfield(Spider)</label>
                    <input type="radio" id="opcao2" name="quest10" value="t">
                    <label class="opcao"for="opcao2">Tobey Maguire(Spider)</label>
                    <input type="radio" id="opcao3" name="quest10" value="f">
                    <label class="opcao"for="opcao3">Tom Holland(Spider)</label>
                    <input type="radio" id="opcao4" name="quest10" value="f">
                    <label class="opcao"for="opcao4">Miles Morales(Spider)</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>


<?php
	$quest9 = $_POST["quest9"];
	session_start();
	$_SESSION["quest9"] = $quest9;
?>