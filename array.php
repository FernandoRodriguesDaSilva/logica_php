<?php 

$secondArray = [];

$myArray = array ('Rob',"Kristen", "Tommy", "Raph" );
$secondArray = array ("France" => "francês","USA" => "Americano", "English"=>"Inglês","Germany"=>"Alemão");

// Array atribuidos pelo sistema

echo "<pre>";
print_r($myArray);
echo "</pre>";

echo "<hr style:color='red';>";
// Atribuindo valores para os array

echo "<pre>";
print_r($secondArray);
echo "</pre>";

// numero de array 
echo sizeof($secondArray);

echo "<hr>"; 


?>