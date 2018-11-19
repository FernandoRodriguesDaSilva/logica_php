

<body>


  <h2>EXERCÍCIO: Arrays</h2>
  <hr>
  <small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


  <h3>Agora é a sua vez</h3>

  <p>Crie um Array e solte as suas informações em sequência.</p>
  <br>


  <?php 
  $computador = array(
    "modelo" => 'Lenovo Ideapad 520-15IKB',
    "processador" => 'Intel Core i7',
    "ram" => '16 GB',
    "disco" => '1 TB'
); 

  $filme = array(
    "autor" => 'Stephen king',
    "titulo" => 'It a coisa',
    "editora" => 'New your time de  1985'
);

  $frutas = array(
    'fruta1' => 'goiaba', 
    'fruta2' => 'maça', 
    'fruta3' => 'banana', 
    'fruta4' => 'uva', 
    'fruta5' => 'morango', 
    'fruta6' => 'caju'
);

?>


<h3>Informação do Computador</h3>

<h4>Modelo: </h4>
<p><?php echo $computador['modelo']; ?></p>
<br>

<h4>Processador: </h4>
<p><?php echo $computador['processador']; ?></p>
<br>

<h4>Memória RAM: </h4>
<p><?php echo $computador['ram']; ?></p>
<br>

<h4>Disco Rígido: </h4>
<p><?php echo $computador['disco']; ?></p>
<br>

<!-- imprimir Uva -->
<h3>Informaçoes de frutas</h3>
<p><?php print $frutas['fruta4']; ?></p>

</body>

<h4>O filme <?php print $filme["titulo"];?>, recebeu o premio pelo autor <?php echo $filme["autor"];  ?> da sua editora <?php print $filme["editora"]; ?></h4>

</html>