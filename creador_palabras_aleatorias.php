<?php
//palabra aleatoria o creador de nombres aleatorios
function construir_nombre($min=4, $max=8){
        $vocales = array("a", "e", "i", "o", "u");
        $consonantes = array("b", "c", "d", "f", "g", "j", "l", "m", "n", "p", "r", "s", "t");
        $random_nombre = rand($min, $max);//largo de la palabra
        $random = rand(0,1);//si empieza por vocal o consonante
        for($j=0;$j<$random_nombre;$j++){//palabra
                switch($random){
                        case 0: $random_vocales = rand(0, count($vocales)-1); $random_nombre.= $vocales[$random_vocales]; $random = 1; break;
                        case 1: $random_consonantes = rand(0, count($consonantes)-1); $random_nombre.= $consonantes[$random_consonantes]; $random = 0; break;
                }
        }
        return $random_nombre;
}

echo ucfirst(construir_nombre());
//ejemplos Bumuc, Acal, Baluceda, Leceme, Rirobit...

?>