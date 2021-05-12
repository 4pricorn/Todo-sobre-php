<?php

echo "<b>OPERADORES</b> <br><br>";

echo "<b>ADICION</b> . <br>";
$number1 = 10;
$number2 = 46;
$result=$number1 + $number2;
echo "10 + 46 = $result <br>";

echo "<b>SUSTRACCION</b> . <br>";
$number1 = 50;
$number2 = 10;
$result=$number1 - $number2;
echo "50 - 10 = $result <br>";

echo "<b>MULTIPLICACION</b> . <br>";
$number1 = 50;
$number2 = 10;
$result=$number1 * $number2;
echo "50 x 10 = $result <br>";

echo "<b>DIVISION</b> . <br>";
$number1 = 50;
$number2 = 10;
$result=$number1 / $number2;
echo "50 ÷ 10 = $result <br>";

echo "<b>Modulo % Residuo de ÷ </b> . <br>";
$number1 = 55;
$number2 = 10;
$result=$number1 % $number2;
echo "55 ÷ 10 = $result <br>";

echo "<b>POTENCIA</b> . <br>";
$number1 = 10;
$number2 = 10;
$result = $number1 ** $number2;
echo "10P10 = $result <br>";

echo "<b>OPERADOR +=</b> . <br>";
$number3 = 10;
// $number3 = $number3 + 5; //15
$number3 += 5;
echo "N° + 5 = $number3 <br>";

echo "<b>OPERADOR -=</b> . <br>";
$number4 = 10;
// $number4 = $number4 - 5; //5
$number4 -= 5;
echo "N° - 5 = $number4 <br><br>";




echo "<b>ESTRUCTURA CONDICIONALES</b> <br><br>";

/* Si la condicion es verdadera
entonces
se ejeucta una o mas sentencias
*/

/*
if (condicion) {
	statement1
	Statement2
} */

$number = 10;
if ($number == 10) { // == <- si la condicion es igual a 
	echo "La condición es verdadera";
}
echo "<br>";

$number = 10;
if ($number == 25) { // == <- si la condicion es igual a 
	echo "La condición es verdadera";
} else {// <- caso contrario
	echo "El número no es 10";
}
echo "<br>";

$number = 8;
if ($number == 10) { // == <- si la condicion es igual a 
	echo "El número es 10";
} elseif ($number == 8) {
	echo "El número  es 8";
} else { // else <- caso contrario
	echo "El número no es ni 10 ni 8";
}
echo "<br>";

var_dump($number == 10);
echo "<br><br>";




echo "<b>SWITCH</b> <br><br>";
/* switch (condicion) {
	case 1
		statement1
	case 2
		Statement2
	default:
		statementXDefault
}
*/

$word = "free";
 switch (trim($word)) { 
 	case 'free':
 		echo "Word is free";
 		break;
 	case 'code':
 		echo "Word is code";
 		break;
 	case 'camp':
 		echo "Word is camp";
 		break;
 	default:
 		echo "Word is not free, neither ";
 }
echo "<br>";

// <- trim borra caracteres en blanco al principio y fin del pararfo
// <- ltrim left trim borra caracteres en blanco a las izquierda
// <- rtrim right trim borra caracteres en blanco a las derecha


//ESTRUCTURAS DE REPETICION  -- WHILE
// While (mientras)

/*
 while (condicion) {
 	statement1
 } 
 */

 $number = 1;
 while ($number <= 10) {
 	echo $number++ . "<br>";
 }

echo 1 . "<br>";
echo 2 . "<br>";
echo 3 . "<br>";
echo 4 . "<br>";
echo 5 . "<br>";
echo 6 . "<br>";
echo 7 . "<br>";
echo 8 . "<br>";
echo 9 . "<br>";
echo 10 . "<br>";

//DO WHILE
/*
* do {
* statement1
* } while (condicion)
*/

$number = 1;
 do {
 	echo $number++ . "<br>";
 } while ($number <=10);

//lo mismo codificado de otra manera

for ($i = 1; $i < 11; $i++) {
	echo "$i" . "<br>";
}

//Imprime del 1 al 10, evitando la ultima ,
for ($i = 1; $i < 11; $i++) {
  if ($i == 10) {
    echo "$i";
  } else {
    echo "$i, ";
  }
}
echo "<br>";

//Array Indexes ()
$carBrands = array(
	'Subaru', 'Toyota', 'Lexus', 'Tesla', 'Jaguar', 'Ferrari', 'Lamborghini');

//echo count($carsBrands); //Cuenta el numero de elementos en el ARRAY
//var_dump($carsBrands); //Muestra N° Array, Tipo, N° de caracteres de c/item, Items 

echo "<b>Imprime el ID del ARRAY y Valor del item del ARRAY</b> <br>";
foreach ($carBrands as $key => $value) {
  echo "Indice: $key" . " Valor: $value <br>";
} 
echo "<br>";


echo "<b>BREAK detiene una operación en un valor</b> <br>";
for ($x =0; $x < 10; $x++) {
	if ($x == 4) {
		break; // se detienes en 4
	}
	echo "The number is: $x <br>";
}
echo "<br>";


echo "<b>CONTINUE Se salta el número según una condición</b> <br>";
for ($x = 0; $x < 10; $x++) {
	if ($x == 4) {
		continue; // Se salta el número
	}
	echo "The number is: $x <br>";
}
echo "<br>";

echo "<b>Llamar código de otro archivo</b> <br>";
require('other-file.php'); // incluye codigo de otro archivo sin hay errores no utiliza el archivo
echo "<br>";
include('other-file.php'); // incluye codigo de otro archivo omite errores de codigo
require_once('other-file.php'); // verifica si el archivo ya fue usado ya no lo usa
include_once('other-file.php'); // verifica si el archivo ya fue usado ya no lo usa omitiendo errores de codigo

?>