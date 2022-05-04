<?php

//https://satellasoft.com/artigo/php/lista-de-exercicios-em-php

/* 1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".*/

$num= 0; //input
$resultado = '';

if($num>0){
    $resultado= 'valor positivo';
}elseif($num<0){
    $resultado= 'valor negativo';
}elseif($num==0){
    $resultado= 'valor igual a zero';};
echo $resultado;
echo '<hr>';

/* 2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex:
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40.*/

$num2= 2; //input

for($i=0; $i <= 10; $i++){
echo"{$num2}*{$i} = ".($num2*$i).'<br>';
    }
echo '<hr>';

/*3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6*/

$num3 = 9;

if($num3>0){
    $val3 = $num3;
    for($i = ($val3-1); $i>0; $i--) {
        $val3 = $val3*$i;
    }
}else{
        $val3=0;
    }
    echo "!{$num3}={$val3}";
echo '<hr>';

// 4) está em outro arquivo

/*5) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. */

$num5= 85258258545;

if($num5%2==0) {
    echo 'par';
}else{
    echo 'ímpar';
}

echo '<hr>';


/*6) Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".*/

$valorA = 6;
$valorB = 7;

if($valorA>=$valorB){
    echo $valorA." ".$valorB;
}else{
    echo $valorB." ".$valorA;
}
echo '<hr>';


/*7) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.*/

$valorA=9;
$valorB=36;

if($valorA>$valorB){
    echo 'o valor da variável A é maior que B';
}else{
    echo 'o valor da variável B é maior que A';
}
echo '<hr>';

/*8) Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]*/
//SEM ARRAY
$N1 = 5;
$N2 = 10;
$N3 = 4;

$media = (($N1+$N2+$N3)/3);

if ($media>=6){
    echo 'APROVADO  ';
}else{
    echo 'REPROVADO ';
}
print_r($media);
echo '<hr>';

// COM ARRAY

$notas=[6,10,9];
$smnotas = 0;

for($i=0;$i<count($notas); $i++){
    $smnotas+=$notas[$i];
}
$resultado8=$smnotas/count($notas);
if($resultado8>=6) {
    echo "Aprovado, {$resultado8}";
}else{
    echo "Reprovado, {$resultado8}";
}

echo '<hr>';

/*9) Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.*/

$nome9= 'Amanda';
$idade9= '7';

echo "Qual é seu nome e sua idade? <br><br> Meu nome é {$nome9} e tenho {$idade9} anos.";

echo '<br>';

if($idade9>18){
    echo "{$nome9} é maior de 18 anos";
}else {
    echo "{$nome9} não é maior de 18 e tem {$idade9} anos.";
}

echo '<hr>';

/*10) Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.*/

$mes = [
    "Janeiro", "Fevereiro",
    "Março", "Abril",
    "Maio", "Junho",
    "Julho", "Agosto",
    "Setembro", "Outubro",
    "Novembro", "Dezembro"];

$numMes = 11;

if($numMes >=1 && $numMes <=12){
    echo $mes[$numMes - 1]; //se nao colocar -1, imprimi o mes da frente NAO ENTENDI.
}else{
    echo "Mês inválido";
}
