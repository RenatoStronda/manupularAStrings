<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manipulação De Strings </title>
</head>
<body>
<?php
    //Converte Tudo Para Maiúsculo
    $aluno = 'Joselito Pereira Do Posso Sem Fundo';
    echo "Nome Aluno Em Maiúsculo: " . strtoupper($aluno). "<br><hr>";

    //Converte Tudo Para Minúsculo
    $pessoa = 'JOSELITO PEREIRA DO POSSO SEM FUNDO';
    echo "Nome Pessoa Em Minúsculo: " . strtolower($pessoa). "<br><hr>";

    //Pega Parte Da String A Partir Da Posição De Início Com A Quantidade De Caracteres Solicitado - Usando Variável $aluno
    echo "Exibindo Parte Do Nome Do Aluno: " . substr($aluno,0,8). "<br><hr>";

    //Pega Parte Da String A Partir Da Posição De Início Com A Quantidade De Caracteres Solicitado - Usando Variável $aluno
    echo "Exibindo Parte Do Nome Do Aluno: " . substr($aluno,19,-6). "<br><hr>";

    //Repete Uma String Na Quantidade De Vezes Solicitadas
    echo "Seu Salário É R$ 10: " . str_repeat("0",10) . ",00<br><hr>";

    //Quantidade De Caracteres - Tamanho Da String
    echo "Tamanho Da Variável Aluno: " . strlen($aluno). "<br><hr>";

    //Substitui Uma String Por Outra Determinada
    echo "Nome Aluno Substituindo Pereira Por Andrade: " . str_replace("Pereira", "Andrade", $aluno) . "<br><hr>";

    //Exibir Posição Inicial Da String Determinada
    echo "Posição Inicial Da Palavra Fundo É: " . strpos($aluno, "Fundo") . "<br><hr>";
?>
</body>
</html>