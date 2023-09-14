<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="pag3.php" method="post">
                <p id="txtBemvindo">Pergunta 2</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Como o Homem-Aranha é conhecido?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest2" value="f">
                    <label class="opcao"for="opcao1">Amigo da Cidade</label>
                    <input type="radio" id="opcao2" name="quest2" value="t">
                    <label class="opcao"for="opcao2">Amigo da Vizinhaça</label>
                    <input type="radio" id="opcao3" name="quest2" value="f">
                    <label class="opcao"for="opcao3">Amigo de Nova York</label>
                    <input type="radio" id="opcao4" name="quest2" value="f">
                    <label class="opcao"for="opcao4">Heroi da Cidade</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>

<?php
	$quest1 = $_POST["quest1"];
	session_start();
	$_SESSION["quest1"] = $quest1;
?>