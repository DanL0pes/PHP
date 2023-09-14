<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="pag10.php" method="post">
                <p id="txtBemvindo">Pergunta 9</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Qual desses grupos o Homem-Aranha não fez parte?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest9" value="f">
                    <label class="opcao"for="opcao1">Vingadores</label>
                    <input type="radio" id="opcao2" name="quest9" value="f">
                    <label class="opcao"for="opcao2">Quarteto Fantátisco</label>
                    <input type="radio" id="opcao3" name="quest9" value="f">
                    <label class="opcao"for="opcao3">X-Man</label>
                    <input type="radio" id="opcao4" name="quest9" value="t">
                    <label class="opcao"for="opcao4">Nenhuma das anteriores</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>

<?php
	$quest8 = $_POST["quest8"];
	session_start();
	$_SESSION["quest8"] = $quest8;
?>