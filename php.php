<?php

//criando variavel

$nome = 'Dafne';
echo $nome;
echo '<br>';

// concatenar usar .(ponto)

echo 'o meu nome e '.$nome;
echo '<br>';

//variavel da variavel

$nome ='Sobrenome';
echo $nome;
echo '<br>';
$Sobrenome = 'Sisdelli';
echo 'o meu sobrenome e '.$$nome;
echo  '<br>';
echo '<br>';


//while

$x = 1;

while ($x <=5){
    echo "o numero e $x";
    echo '<br>';
    $x+=2;
}
echo '<br>';

//do while;

$x = 1;
    do {
        echo "o numero e  $x <br>";
        $x+=.5;
    } while ($x <=5);
    echo  '<br>';

//for
    for ($x = 1; $x<=12;$x+=.5){
        echo "o numero e $x <br>";
    }
echo  '<br>';

// foreach

$cores = ["azul", "amarelo", "verde", "vermelho"];
    foreach ($cores as $valor){
        echo "A cor é $valor <br>";
    }



