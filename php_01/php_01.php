<?php


$entero = 1;
$decimal = 1.2;
$string = "El numero es $entero";
$string2 = 'El numero es $entero';
$frase = "She said me that \"I'm the best\"";
$frase = 'She said me that "I\'m the best"';

echo $frase;

echo $string;
echo($decimal);
ECHO($string);

$nombre = "Manolo";
$apellido = "Parker";
$nombreCompleto = "<p>".$nombre." ".$apellido."</p>";

print($nombreCompleto);

$frutas = ["kiwi", "pera", "mango"];

echo $frutas[0];

$nombreCompleto = ["nombre" => "Mike", "apellido" => "Corleone"];
echo $nombreCompleto["apellido"];


if ($nombre == "Peter")
{
    echo "<p>El nombre es $nombre</p>";

} elseif ($apellido = "Parker") {

    echo "<p>El apelido es $apellido</p>";

} 

else 
{
    echo "<p> El nombre NO es 'Peter', es $nombre</p>";
}

for ($i=0; $i< count($frutas); $i++)
{
    
    echo "<p> $frutas[$i]</p>";
}