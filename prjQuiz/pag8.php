<html>
    <head>
        <meta charset="UTF-8">
        <title>Spider Quiz</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="images\spiderLogo.png">
        <div id="conteudo">
            <form action="pag9.php" method="post">
                <p id="txtBemvindo">Pergunta 8</p>
                <img src="images/spider-sting.gif" alt="Spider-Man Gif" width=15% height=5%>
                <p id="txtBemvindo2">Qual desses não é um vilão do Homem-Aranha?:</p>
                <div class="radioButton">
                    <input type="radio" id="opcao1" name="quest8" value="f">
                    <label class="opcao"for="opcao1">Duende Verde</label>
                    <input type="radio" id="opcao2" name="quest8" value="f">
                    <label class="opcao"for="opcao2">Mr. Mysterio</label>
                    <input type="radio" id="opcao3" name="quest8" value="t">
                    <label class="opcao"for="opcao3">Camaleão</label>
                    <input type="radio" id="opcao4" name="quest8" value="f">
                    <label class="opcao"for="opcao4">Nenhuma das anteriores</label>
                </div>
                <br>
                <button name="proximo" type="submit">Continuar</button>
            </form>
        </div>
    </body>
</html>

<?php
	$quest7 = $_POST["quest7"];
	session_start();
	$_SESSION["quest7"] = $quest7;
?>