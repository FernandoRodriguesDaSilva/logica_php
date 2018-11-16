<?php 
if($_GET){
	$i = 2;
	$e_primo = true;

	while ($i < $_GET['number']){
		if($_GET['number'] % $i == 0){
						// Numero não é primo
			$e_primo = false;
		}
		$i++;
	}
	if(($_GET['number']) < 2){
		echo "Número é menor que 2, não é primo então";
	}
	if($e_primo){
		echo "<p>Nùmero ".$i." é primo.</p>";
	}else{
		echo "<p>Número " .$i. " não é primo</p>";
	}
}
?>

<p>	What's you name? </p>

<form action="get_post.php" method="get">
	
	Número<input placeholder="Digite seu número" type="number" name="number">
	<input type="submit" value="Enviar">
</form>