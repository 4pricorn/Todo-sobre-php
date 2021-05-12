<?php 

echo "<b>ARRAY BIDIMENSIONAL & SWITCH</b> Ejemplo del resultado a obtener <br>";
$cars = array(
  array("Volvo",22,18), // Marca, stock, sold
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

for ($i = 0; $i < 4; $i++) {  
  for ($y = 0; $y < 3; $y++) {
    switch($y) {
      case 0: echo $cars[$i][$y] . ": "; break;
      case 1: echo ' In stock: ' . $cars[$i][$y]; break;
      case 2: echo ' Sold :' . $cars[$i][$y]; break;
      default: break;
    }
  }
  echo '<br>';
}
echo '<br>';


echo "<b>ARRAY BIDIMENSIONAL & FOREACH</b> <br>";

/* Sesión 4 Tarea 1 

Iterar el array cars e imprimir en pantalla los elementos de cada uno de los arrays.
usando la estructura foreach()

Se espera la siguiente estructura:

Volvo: In stock: 22 Sold: 18
BMW: In stock: 15 Sold: 13
Saab: In stock: 5 Sold: 2
Land Rover: In stock: 17 Sold: 15 */



$cars = array( 
		
			array (   
	            "brand" => 'Volvo',
	            "stock" => 22,    
	            "sold" => 18
	        ),

	        array (
	           "brand" => 'BMW',
	           "stock" => 15,
	           "sold" => 13
	        ),

	        array (
	           "brand" => 'Saab',
	           "stock" => 5,
	           "sold" => 2
	        ),

	        array (
	           "brand" => 'Land Rover',
	           "stock" => 17,
	           "sold" => 15
	        )
     );


foreach($cars as $car){
    echo $car['brand']. ": ";;
    echo ' In stock: '. $car['stock'];
    echo ' Sold:'. $car['sold'].'<br>';
}

 ?>