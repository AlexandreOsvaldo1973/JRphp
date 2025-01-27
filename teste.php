<?php

// PHP Intermediário

echo "<h2>Resultado PHP <br></h2>";

// Variáveis

$nome = "Monalisa";
$sobrenome = " Catrina";
$nomeCompleto = $nome . $sobrenome;
$localNascimento = "SBS";
$sexo = "F";
$idade = 20;
$vacina = false;
$senha = 1234;

echo "Nome: $nome<br>";
echo " Tipo: ". gettype($nome)."<br>";
echo "Nome Completo: ".$nomeCompleto."<br>";
echo " Tipo: ".gettype($nomeCompleto)."<br>";
echo "Local de Nascimento: ".$localNascimento."<br>";
echo " Tipo: ".gettype($localNascimento)."<br>";
echo "Sexo: ".$sexo."<br>";
echo " Tipo: ".gettype($sexo)."<br>";
echo "Idade: ".$idade."<br>";
echo " Tipo: ".gettype($idade)."<br>";
echo "Vacinada: ".$vacina."<br>";
echo " Tipo: ".gettype($vacina)."<br>";

// Operadores Matemáticos

$x = 1;
$y = 2;

$soma = $x + $y;
$subtrai = $x - $y;
$multiplica = $x * $y;
$divide = $x / $y;

// Constante

define('MIN', 10);
define('MAX', 50);

echo "Mínimo: " . MIN . "<br>";
echo "Máximo: ". MAX . "<br>";

if($idade >= MIN && $idade <= MAX){
    echo "Acesso Liberado <br>";
}else{
    echo "Acesso Bloqueado <br>";
}

if($vacina == true ){
    echo "Já é Vacinada! <br>";
}else{
    echo "Têm que vacinar! <br>";
}

if($senha == 123){
    echo "*Acesso autorizado nível 1* <br>";
}elseif($senha == 1234){
    echo "**Acesso autorizado nível 2** <br>";
}else{
    echo "Acesso negado <br>";
}

?>

<!DOCTYPE html>
<html lang="ptBr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação</title>
</head>
<body>
    <h2>Resultado HTML<br></h2>
    <p>Acesso ao Sistema: <?php echo $senha?></p>
    <p>Nome: <?=$nome?></p>
    <p>Nome Completo: <?=$nomeCompleto?></p>
    <p>Local Nascimento: <?=$localNascimento?></p>
    <p>Idade: <?=$idade?></p>
    <p>Sexo: <?=$sexo?></p>
    <p>Vacinada: <?$vacina?></p>
    <p>Soma: <?=$soma?></p>
    <p>Subtração: <?=$subtrai?></p>
    <p>Multiplicação: <?=$multiplica?></p>
    <p>Divisão: <?=$divide?></p>
    
</body>
</html>
