<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="pag6.php" method="post">
                <p id="txtBemvindo">Pergunta 5</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Homem-Aranha é o personagem mais famoso da Marvel?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest5" value="t">
                    <label class="opcao"for="opcao1">Verdadeiro</label>
                    <input type="radio" id="opcao2" name="quest5" value="f">
                    <label class="opcao"for="opcao2">Falso</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>

<?php
	$quest4 = $_POST["quest4"];
	session_start();
	$_SESSION["quest4"] = $quest4;
?>