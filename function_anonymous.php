<!-- Fazer a variavel receber uma função  -->
<?php 

$minha_funcao = function(){
	echo "imprindo minha primeira função anonima dentro de uma variavel";
};

$variavel = function($titulo,$corpo,$rodape){
	echo "</h1>".$titulo."</h1> <br>";
	echo "</h1>".$corpo."</h1> <br>";
	echo "</h1>".$rodape."</h1> <br>";
};

// ===========================================

$minha_funcao();

//--------------------------------------------

echo "<br><br>";

$variavel("Titulo de um texto", "conteudo do texto","conclusão de texto");

//---------------------------------------------

function teste($par1,$par2){
	echo "<h4> Teste:  $par1 e $par2 </h4>";
}

teste("Meu parametro 1 ", "Meu parametro 2");

// Começando sempre da direita pra esquerdas adicionando parametroas padrão

function Padrao($par1="Meu parametro 1 ",$par2="Meu parametro 2"){
	echo "<h4> Teste:  $par1 e $par2 </h4>";
}

Padrao();

?>