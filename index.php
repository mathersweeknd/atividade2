<?php
 //O programa precisa ler, calcular e exibir a pontuação total das quatro notas do aluno.

 $nota1 = 12;
 $nota2 = 15;
 $nota3 = 19;
 $nota4 = 80;

 $soma = $nota1 + $nota2 + $nota3 + $nota4; 
 
 echo "O valor das notas somadas é de $soma ";
?>

<?php
//O programa precisa ler, calcular e exibir a média das quatro notas do aluno.

$nota1 = 12;
$nota2 = 15;
$nota3 = 19;
$nota4 = 80;

$media = $nota1 + $nota2 + $nota3 + $nota4 / 4;

echo "A média das notas é de $media ";

?>

<?php
//O programa precisa ler, calcular e exibir a área do retângulo em metros quadrados.

$largura = 6.0;
$comprimento = 12.00;

$area = $largura * $comprimento;

echo "A área do retangulo é de $area metros quadrados";
?>

<?php
// O programa precisa ler dois valores diferentes e informar a diferença entre eles.

$valor1 = 245;

$valor2 = 315;

$diferenca = $valor1 - $valor2;

echo "A diferença de valor entre os valores 1 e 2 é de $diferenca";
?>

<?php 
// O programa precisa ler dois valores, calcular e exibir a divisão do primeiro valor pelo segundo.

$valor1 = 15;
$valor2 = 5;

if ($valor2 != 0) {
    $divisao = $valor1 / $valor2;
    echo "O valor da divisão é de $divisao";
} else {
    echo "Divisão inválida";
}
?>

<?php
//O programa precisa receber o peso de uma pessoa em quilos, calcule e mostre esse peso em gramas.

$peso_kg = 68;
$peso_gr = $peso_kg * 1000;
echo"O peso em de kilos em gramas é de $peso_gr";

?>

<?php
//Um restaurante self-service cobra R$45,00 por cada quilo de refeição. O programa precisa ler o peso do prato montado pelo cliente (emquilos) e imprimir o valor a pagar.
$peso_prato = 0.8; 
$preco_kg = 45.00;

$valor_a_pagar = $peso_prato * $preco_kg;
echo "O valor a pagar é: R$ " . $valor_a_pagar;

?>

<?php
//Um equipamento de refrigeração recebe informações de temperatura
//em Fahrenheit. O programa precisa converter Fahrenheit em Celsius. Sabendo
//que a fórmula é C = (F – 32) / 1.8 e escreva na tela a temperatura em graus
//Celsius e em Fahrenheit.
$fahrenheit = 98.6;
$celsius = ($fahrenheit - 32) / 1.8;
echo "A temperatura em Celsius é: " . $celsius . "°C";
echo "A temperatura em Fahrenheit é: " . $fahrenheit . "°F";
?>

<?php
//O sistema precisa receber o valor do raio de uma circunferência, e em
//seguida mostrar o diâmetro, comprimento e área da circunferência.
$raio = 5;
$diametro = 2 * $raio;
$circunferencia = 2 * pi() * $raio;
$area = pi() * pow($raio, 2);
echo "O diâmetro é: " . $diametro . " metros\n";
echo "O comprimento da circunferência é: " . $circunferencia . " metros\n";
echo "A área é: " . $area . " metros quadrados";
?>

<?php
//O sistema está recebendo valores do tipo inteiro em duas variáveis. A
//funcionalidade troca, precisa inverter os valores dessas variáveis e exibir o
//valor antigo e o novo valor de cada uma das variáveis.

$a = 5;
$b = 10;
echo "Valores antes da troca: A = $a, B = $b\n";
$temp = $a;
$a = $b;
$b = $temp;
echo "Valores após a troca: A = $a, B = $b";
?>















