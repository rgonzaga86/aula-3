<?php

/*
    while - enquanto algo for verdadeiro faça
    while (condição é verdadeira)
    {
        faça o que está aqui    
    }

    
    for - para uma condição até um resultado faça

    */

$i = 1;
while($i <= 10){
     echo "{$i} - Vou arrebbentar no PHP<br>";
    $i= $i + 1;

}

echo "<hr>";
echo "<h2>Minha Tabuada</h2>";

$j = 1;
while($j <= 3){ 
    echo "{$j} - Vou arrebbentar no PHP<br>";
    $j= $j + 1;
}
echo "<hr>";
     
$i = 1;
$num = 5;
while($i<=10){

    echo "{$i} X { $num} = ".$i*$num;
    echo "<br>";
    $i++; // $i = $i +1
    }