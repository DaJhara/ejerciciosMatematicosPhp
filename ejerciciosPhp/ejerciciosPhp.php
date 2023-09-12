<?php

$numero1 = 4;
$numero2 = 5;
$numero3 = 6;

$suma = $numero1 + $numero2;
$resta = $numero3 - $numero2;
$multiplicacion = $numero1 * $numero3;
$division = $numero3 / $numero1;
$potencia = pow($numero2, 2);
$raizCuadrada = sqrt($numero1);

echo "Operaciones básicas:\n";
echo "Suma: $numero1 + $numero2 = $suma\n";
echo "Resta: $numero3 - $numero2 = $resta\n";
echo "Multiplicación: $numero1 * $numero3 = $multiplicacion\n";
echo "División: $numero3 / $numero1 = $division\n";
echo "Potencia: $numero2^2 = $potencia\n";
echo "Raíz Cuadrada de $numero1 = $raizCuadrada\n";

$ejercicio1 = $numero1 + $numero2 - $numero3;
$ejercicio2 = $numero1 * $numero2 / $numero3;
$ejercicio3 = ($numero2 - $numero1) ** 2;
$ejercicio4 = sqrt($numero3) + $numero1;
$ejercicio5 = $numero2 * $numero3 - $numero1;
$ejercicio6 = pow($numero1, 2) / $numero2;
$ejercicio7 = ($numero3 - $numero2) * $numero1;
$ejercicio8 = sqrt($numero2 * $numero3);
$ejercicio9 = ($numero1 + $numero2) / sqrt($numero3);
$ejercicio10 = (($numero3 + $numero2) * sqrt($numero2)) + ($numero2 * $numero3);

echo "\n";
echo "Ejercicios adicionales:\n";
echo "Ejercicio 1: $numero1 + $numero2 - $numero3 = $ejercicio1\n";
echo "Ejercicio 2: $numero1 * $numero2 / $numero3 = $ejercicio2\n";
echo "Ejercicio 3: ($numero2 - $numero1)^2 = $ejercicio3\n";
echo "Ejercicio 4: √$numero3 + $numero1 = $ejercicio4\n";
echo "Ejercicio 5: $numero2 * $numero3 - $numero1 = $ejercicio5\n";
echo "Ejercicio 6: $numero1^2 / $numero2 = $ejercicio6\n";
echo "Ejercicio 7: ($numero3 - $numero2) * $numero1 = $ejercicio7\n";
echo "Ejercicio 8: √($numero2 * $numero3) = $ejercicio8\n";
echo "Ejercicio 9: ($numero1 + $numero2) / √$numero3 = $ejercicio9\n";
echo "Ejercicio 10: (($numero3 + $numero2) * √$numero3) + ($numero2 + $numero3) = $ejercicio9\n";
?>