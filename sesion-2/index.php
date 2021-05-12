<?php

//declarar variable

$firstName = "Juan Carlos"; //String --- Nomenclatura CamelCase joroba de camello 
$lastName = "Torres Rua";   //String
$age = 34;                  //integer
$price = 150.34;            //double
$notMarried = true;         //boolean
$hasMoney = "";             //vacio
$variableNull = null;       //null

/* echo($firstName)
    echo($lastName) */

//Declaración de variables 2 formas

define(PI, 3.1415926535);
const EPSILON = 2.71828; //php 5.6.0

// String o cadena de caracteres --- Obtener tipos :)

$frutas = array ("banana", "apple", "orange","watermellon","pineapple"); //Array de indices enteros

echo(gettype($firstName));           //string
echo "<br>";                 //* Esto es un salto de linea
echo(gettype($lastName));            //string
echo "<br>";
echo(gettype($age));            //integer
echo "<br>";
echo(gettype($price));          //double
echo "<br>";
echo(gettype($notMarried));     //boolean
echo "<br>";
echo(gettype($hasMoney));       //string
echo "<br>";
echo(gettype($variableNull))."\n";   //NULL
echo "<br>";
echo(gettype(EPSILON))."\n";         //double
echo "<br>";
echo(gettype($frutas))."\n";         //Array

?>
    
<html>
    <head>
        <title>Hecho en PHP - Sesión 02</title> 
        <link rel=StyleSheet href="css/style.css" type="text/css">
    </head>
	<body>
        <h1>TIPOS DE CARACTERES</h1>
        <p><b>Nombre:</b> <?php echo($firstName ." ". $lastName); ?></p> <! –– Concatenar 2 variables ––> 
        <p><b>Edad:</b> <?php echo($age); ?></p>
        <p><b>Precio:</b> <?php echo($price); ?></p>
        <p><b>Estiado Civil:</b> <?php echo($notmMarried); ?></p>
        <p><b>Valor de PI:</b> <?php echo(PI); ?></p>
        <p><b>Imprimir Array "no echo":</b> <?php print_r($frutas); ?></p>
        <p><b>Imprimir Array con ID y número de caracteres de cada valor:</b> <?php var_dump($frutas,); ?> </p>
        <p><b>Imprimir valor 1 del array:</b> <?php echo($frutas[1]); ?> </p>
        
        <script src="js/main.js"></script>

    </body>
</html>