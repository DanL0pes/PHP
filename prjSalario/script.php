 <?php
    $valorHora = $_POST['valorHora'];
    $qtdHora = $_POST['qtdHora'];
    
    $salario = $valorHora*$qtdHora;
    echo("Seu salário é: R$");
    echo($salario);
?>