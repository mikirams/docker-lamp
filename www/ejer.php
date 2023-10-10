<!DOCTYPE html>
<html>
<body>


<h1>Línea </h1>
<p>Actualice página para obtener una nueva línea</p>

<?php

//Líneas aleatorias ////////////////////////////////////////////////////////////

$i=0;
while ($i<5){
$longitud=(rand(10,1000));
echo "Longitud aleatoria calculada: " . $longitud . "<br>";  

echo '<svg height="20" width="1500">
        <line x1="0" y1="0" x2="' . $longitud .'" y2="0" style="stroke:rgb(255,0,0);stroke-width:5" />
        </svg>
      ';

$i++;
}

//Círculos concéntricos ///////////////////////////////////////////////////////
$radio=100;

echo '<svg height="200" width="200">';

while ($radio>0){
    echo ' <circle cx="100" cy="100" r="' . $radio . '" stroke="black" stroke-width="3" fill="yellow" />';
    $radio=$radio-20;
}
    
    echo '</svg><br>';


//Círculos encadenados ///////////////////////////////////////////////////////
$pos_x=50;

echo '<svg height="200" width="1000">';

while ($pos_x<950){
    echo ' <circle cx="' . $pos_x . '" cy="100" r="50" stroke="black" stroke-width="3" fill="tomato" />';
    $pos_x+=50;
}
echo '</svg><br>';

//Dados Aleatorios ////////////////////////////////////////////
$dado1= rand(1,6);
$dado2= rand(1,6);
echo '<img src="recursos/' . $dado1 . '.svg" width="10%" height="10%">';
echo '<img src="recursos/' . $dado2 . '.svg" width="5%" height="5%"><br>';
echo '<br>';

//Dados Llenos ////////////////////////////////////////////
$i=0;
$j=0;
while ($j<5){
    while ($i++<10){
        $dado1= rand(1,6);
        echo '<img src="recursos/' . $dado1 . '.svg" width="10%" height="10%">';
    }
    $i=0;
    $j++;
}
?>
</body>
</html>
