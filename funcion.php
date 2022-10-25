<?php

function suma($num1, $num2){

    $resultado = $num1+ $num2;

    return $resultado;

}

$contador =suma(2, 4);
echo("<br>");
echo suma(8, 4);
echo("<br>");
echo $contador;


function frase_may($frase, $conversion=true){

    $frase=strtolower($frase);
    if ($conversion==true){
    $resultado = ucwords($frase);

    }else{
        $resultado=strtoupper($frase);
    }

    return $resultado;
};

echo("<br>");
echo (frase_may("esto es una prueba"));
echo("<br>");
echo("<br>");
echo (frase_may("esto es una prueba",false));
echo("<br>");


//paso por valor
//function paso_por_valor($foo)

//paso por referencia
//function paso_por_referencia(&$foo)


?>