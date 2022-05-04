<?php
$carros = array('gol', 'fusca', 'uno', 'fit');
print_r($carros);
echo '<br>';
echo $carros [2];
echo '<br>';

$motos = array();
$motos[] = "titan";
$motos[] = "fazer";
$motos[] = "bros";
echo $motos[1];
echo '<br>';

//Count
$totalCarros = count($carros);
echo $totalCarros;
echo '<br>';

//Foreach - para cada
foreach ($motos as $valor){
    echo $valor;
    echo '<br>';
}
echo '<hr>';

//Associativo
$pessoa = array ('nome'=> 'Beatriz', 'idade' => '23', 'altura' => '1,66'
);
print_r ($pessoa);
echo '<br>';
echo $pessoa['altura'];
echo '<br>';

foreach($pessoa as $indice => $valor){
    echo $indice.': '.$valor;
    echo '<br>';
}
echo '<hr>';

//Multidimensional
$cargos = array(
    'superior'=> array('Amanda' => 'médica', 'Jaqueline' => 'enfermeira', 'Rafael' => 'dentista', 'Vanessa' => 'enfermeira'),
    'medio'=> array ('José' => 'tecn. enfermagem', 'Osvaldo' => 'aux. enfermagem', 'Isabel' => 'escrituraria'),
    'fundamental'=> array ('Madalena' => 'seviços gerais', 'Rafaela' => 'serviços gerais', 'Gustavo' => 'serviços gerais'));
    foreach($cargos['medio'] as $indice => $valor){
        echo $indice.': '.$valor.'<br>';
    }
echo '<hr>';

    foreach($cargos['superior'] as $indice => $valor){
        echo $valor. ': '.$indice.'<br>';
          }
    echo '<br>';



