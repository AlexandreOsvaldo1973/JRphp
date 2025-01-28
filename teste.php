<?php

// PHP Intermediário

echo "<h2>Resultado PHP <br></h2>";

// Variáveis

$nome = "Monalisa";
$sobrenome = " Catrina";
$nomeCompleto = $nome . ' ' . $sobrenome;
$localNascimento = "SBS";
$sexo = "F";
$idade = 20;
$peso = 13.56;
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
echo "<hr>";
var_dump($nome);
echo '<br>';
var_dump($peso);
echo '<br>';
var_dump($vacina);
echo "<hr>";

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
echo "<hr>";

// Arrays

$nomes = array("Monalisa", "Sophia", "Lupita");
$sobrenomes = ["Catrina", "Terriviê", "Prita"];
$names = [
    10 => "Lalá",
    20 => "Lelé",
    30 => "Lilí"
];

$nomes[] = "Tchozão";

array_push($nomes, "Belinha");
array_push($nomes, "Kika", "Dininha", "Bodeco");

echo $nomes[0].' '.$sobrenomes[0].' '.$names[20]."<br>";
echo "Quando o valor não existe: ".$names[40]."<br>";
var_dump($nomes); //apresenta o array em linha
echo '<pre>';
print_r($nomes); // apresenta organizado em array
echo '</pre>';

unset($nomes[3]); //removeu elementos do array
echo '<pre>';
print_r($nomes);
echo '</pre>';

$empresa = [
    'CEO' => "Alexandre",
    'Administrador' => "Lucas",
    'Contabilidade' => "Luciana",
    'Relações Públicas' => "Anne",
    'Executivo' => "Francisco"
];

echo "Vamos demitir: ".$empresa['Administrador'].'<br>';
echo "Vamos promover a Diretor de Contratos Internacionais: ".$empresa['Executivo'];

$empresa['Operário Digital'] = "Alexandre Filho";

echo '<pre>';
print_r($empresa);
echo '</pre>';

$lojas = [
    'santos' => [
        'telefone' => '555-1234',
        'e-mail' => 'santos@enupla.com',
    ],
    'itajai' => [
        'telefone' => '555-4567',
        'e-mail' => 'itajai@enupla.com',
    ]
];

echo '<pre>';
print_r($lojas);
echo '</pre>';

echo $lojas['santos']['e-mail'];

$notas = [
    [10, 20, 30],
    [100, 200, 300],
    [1000, 2000, 3000]
];

echo '<pre>';
echo print_r($notas);
echo '</pre>';

echo $notas[2][1];

echo '<br>';

$resultado = is_array($nomes);
$resultado = count($nomes);

echo array_push($nomes, 'Tobó');
echo array_unshift($nomes, "Catita");
echo $resultado = array_pop($nomes);
echo $resultado = array_shift($nomes);
unset($nomes[0]);

echo $resultado;


echo "<hr>";

if($idade >= MIN && $idade <= MAX){
    echo "Acesso Liberado <br>";
}else{
    echo "Acesso Bloqueado <br>";
}

echo "<hr>";

if($vacina == true ){
    echo "Já é Vacinada! <br>";
}else{
    echo "Têm que vacinar! <br>";
}

echo "<hr>";

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
    <p>Peso: <?=$peso?>Kg</p>
    <p>Vacinada: <?$vacina?></p>
    <p>Soma: <?=$soma?></p>
    <p>Subtração: <?=$subtrai?></p>
    <p>Multiplicação: <?=$multiplica?></p>
    <p>Divisão: <?=$divide?></p>
    
</body>
</html>
