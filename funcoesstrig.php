<?php

//repete string
echo str_repeat("/Rodrigo/",20);
echo "<hr>";

#caixa alta- upper -case
$nome = "Rodrigo Gonzaga";
echo strtoupper($nome);
echo "<hr>";

#lower-Case   str-string   to-para  - lower - caixa baixa
echo strtolower("HOJE ESTAMOS APRENDENDO DIVERSAS FUNÇÕES");

# trocar texto  - str_replace
echo "<hr>";
$texto = "O rei rico de roma";
echo str_replace("rei","pobre",$texto);


#primeira letra maiúscula  ucfirst(texto)
echo "<hr>";
$func = "rodrigo gonzaga de oliveira";
echo ucfirst($func);
echo "<br>";
echo ucwords($func); //Toda primeira letra maiuscula

#Usuario digita o conteúdo tudo errado

echo "<hr>";
$aluno = "rodrigo gonzaga de oliveira"; //letras maiúculas, minúsculas, invertido

echo ucwords(strtolower($aluno));