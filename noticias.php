<?php 

$noticias = array();

$noticias[1]['titulo'] = "titulo da noticia 1";
$noticias[1]['conteudo'] = "conteudo da noticia 1";

$noticias[2]['titulo'] = "titulo da noticia 2";
$noticias[2]['conteudo'] = "conteudo da noticia 2";

$noticias[3]['titulo'] = "Titulo da noticia 3";
$noticias[3]['conteudo'] = "Conteudo da noticia 3";

$noticias[1]['descricao'] = "descricao da noticia 1";
$noticias[2]['descricao'] = "descricao da noticia 2";
$noticias[3]['descricao'] = "descricao da noticia 3";

/*
echo "<pre>";
echo print_r($noticias);
echo "</pre>";
*/

$conteudo = 1;

do {
	echo $noticias[$conteudo]['titulo'];
	echo "<br/>";
	echo $noticias[$conteudo]['conteudo'];
	echo "<br/>";
	echo $noticias[$conteudo]['descricao'];
	echo "<br/>";
	echo "<br/>";

	$conteudo = $conteudo + 1;
} while ($conteudo <= 3);

?>