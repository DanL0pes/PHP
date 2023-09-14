<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="pag4.php" method="post">
                <p id="txtBemvindo">Pergunta 3</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Qual desses atores interpretou o homem-aranha mais vezes?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest3" value="f">
                    <label class="opcao"for="opcao1">Andrew Garfield</label>
                    <input type="radio" id="opcao2" name="quest3" value="f">
                    <label class="opcao"for="opcao2">Tobey Maguire</label>
                    <input type="radio" id="opcao3" name="quest3" value="t">
                    <label class="opcao"for="opcao3">Tom Holland</label>
                    <input type="radio" id="opcao4" name="quest3" value="f">
                    <label class="opcao"for="opcao4">Adam Sandler</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>

<?php
	$quest2 = $_POST["quest2"];
	session_start();
	$_SESSION["quest2"] = $quest2;
?>