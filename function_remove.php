<!--  Codigo de função que remove pessoas atraves de um array  -->

<!-- Retornando elemento em uma função -->
<?php

$pessoas = [];

function adicionarPessoas($id,$nome,$idade,$cidade){
	global $pessoas;
	$pessoas[] = ['id'=>$id,'nome'=>$nome,'idade'=>$idade,'cidade'=>$cidade];
}

adicionarPessoas(1,"Fernando",20,"Ibaté");
adicionarPessoas(2,"julio",30,"Descalvado");
adicionarPessoas(3,"Paula ",32,"blumenau");
adicionarPessoas(4,"Juliana ",32,"Campinas");
adicionarPessoas(5,"Carlos ",32,"Porto");
adicionarPessoas(6,"Roberto ",32,"Matão");
adicionarPessoas(7,"Fatima ",32,"Mococa");

function imprimePessoas(&$arraypessoas){
	echo "Depois de remover ";
	echo "<pre>";
	var_dump($arraypessoas);
	echo "</pre>";
}

function getQuantidadePessoas($pessoas){
	return count($pessoas);
}

$quantidade_pessoas = getQuantidadePessoas($pessoas);
echo "Antes de remover: ";
echo $quantidade_pessoas . " Pessoas"; 

// Remove o array pelo id e cidade passado atraves da função abaixo
function removeDadosArray(&$pessoas,$id,$cidade){
	$remove_id = array_search($id, array_column($pessoas, 'id'));
	$remove_cidade = array_search($cidade, array_column($pessoas, 'cidade'));
	if(is_integer($remove_id)){
		if(is_integer($remove_cidade)){ 
			array_splice($pessoas, $remove_id,$remove_cidade);
		} 
	} else
	echo "Dados não existe para ser excluido";
}

removeDadosArray($pessoas,2,'Descalvado');

imprimePessoas($pessoas);

$quantidade_pessoas = getQuantidadePessoas($pessoas);
echo "Depois de remover: ";
echo $quantidade_pessoas . " Pessoas"; 

?>