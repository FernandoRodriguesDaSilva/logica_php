<?php 

include_once ('funcao.php');

$family = array ("Marcia", "Aline", "Leandro","Fernando");

//////////////////////////////////////////////////////////////
utilizandoFor();
// contador progressivo
for ($contador = 0; $contador <= 10; $contador++){
	echo $contador . "<br>";
} 

echo "<hr>";
//////////////////////////////////////////////////////////////
utilizandoFor();

// contador regressivo
for($regredir = 10; $regredir >= 0; $regredir--){
	echo $regredir . "<br>";
}

echo "<hr>";
/////////////////////////////////////////////////////////////////

// for com array
utilizandoFor();

for ($i = 0; $i < sizeof($family); $i++){
	echo $family[$i]. "<br>";
}


echo "<hr>";

///////////////////////////////////////////////////////
utilizandoForeach();
foreach ($family as $fa){
	echo "O valores no array são:" . $fa . " <br><br>";
}

echo "<hr>";

/////////////////////////////////////////////////////////////
utilizandoWhile();
// progredindo
$i = 0;

while ($i <= 10){ 
	echo $i."<br>";
	$i++;
}

echo "<hr>";
// regredindo
$i = 10;

while ($i >= 0){ 
	echo $i."<br>";
	$i--;
}

echo "<hr>";
// de 5 em 5 
$i = 1;

while ($i <=10){
	$j = $i * 5;
	echo $j."<br>";
	$i++;
}

echo "<hr>";

$i = 0;

while($i < sizeof($family)){
	echo $family[$i]."<br>";
	$i++;
}

echo "<hr>";

utilizandoDoWhile();

$num = 1;

do {
	echo "Testando laço usando DoWhile " . $num . "<br>";
	$num = $num + 1;
} while ($num <= 10);

echo "<hr>";











?>