<?php 


function somar(){
	return 2 + 3;
}

switch (somar()){
	case 1:
	echo 'case número 1 ';
	break;
	case 2:
	echo 'case número 2';
	break;
	case 3:
	echo 'case número 3';
	break;
	case 4:
	echo 'case número 4';
	break;
	case 5:
	echo 'case número 5';
	break;
	case 6:
	echo 'case número 6';
	break;
	
	default:
	echo "Nenhum valor foi achado";
	break;
}

?>