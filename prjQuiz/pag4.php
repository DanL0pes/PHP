<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="pag5.php" method="post">
                <p id="txtBemvindo">Pergunta 4</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Qual destes personagem nunca namorou Homem-Aranha?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest4" value="f">
                    <label class="opcao"for="opcao1">Gwen Stacy</label>
                    <input type="radio" id="opcao2" name="quest4" value="f">
                    <label class="opcao"for="opcao2">Mary Jane</label>
                    <input type="radio" id="opcao3" name="quest4" value="f">
                    <label class="opcao"for="opcao3">Gata Negra</label>
                    <input type="radio" id="opcao4" name="quest4" value="t">
                    <label class="opcao"for="opcao4">She-Hulk</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>

<?php
	$quest3 = $_POST["quest3"];
	session_start();
	$_SESSION["quest3"] = $quest3;
?>