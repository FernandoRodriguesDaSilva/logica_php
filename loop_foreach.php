<body>
    <h2>EXERCÍCIO: LOOP FOREACH</h2>
    <hr>
    <small>Curso de Básico de PHP</small>
    <h3>Agora é a sua vez</h3>
    <p>Crie um Array, de preferência multidimensional, e solte as informações de cada item deste array em uma lista usando o loop foreach.</p>
    <br>

    <?php 
    $cursos = array(

        array(
            "valor" => 55.00,
            "titulo_curso" => "Curso de Laravel ",
            "professor" => "Charles da Silva",
            "descriçao" => "Curso focado no framework php chamado laravel",
        ),
        array(
            "valor" => 45.00,
            "titulo_curso" => "Curso de PHP Básico",
            "professor" => "Pedro Caetano",
            "descriçao" => "Curso para iniciantes",
        ),
        array(
            "valor" => 65.00,
            "titulo_curso" => "Curso de PHP Intermediário",
            "professor" => "Paulo Kissil",
            "descriçao" => "Segunda parte do curso focando em funções e array em php",
        ),
        array(
            "valor" => 185.00,
            "titulo_curso" => "Curso de PHP Orientado a Objetos",
            "professor" => "Fernando Rodrigues",
            "descriçao" => "Curso focado em estrutura CRUD E MVC em php.",
        ),
        array(
            "valor" => 285.00,
            "titulo_curso" => "Curso de Fotos",
            "professor" => "Marcia Regina Ignácio",
            "descriçao" => "Aprenda a manipular e configurar CS6 e photofilter.",
        ),
        array(
            "valor" => 385.00,
            "titulo_curso" => "Curso de Javascript",
            "professor" => "Leandro Rodrigues da Silva",
            "descriçao" => "Curso focado do básico ao avançado em javascript com jquery",
        ),
        array(
            "valor" => 785.00,
            "titulo_curso" => "Curso DreamWeaver",
            "professor" => "Aline da Silva",
            "descriçao" => "Utilizando Framework php para utilizar Dreamweaver no modo master"
        ),
    ); 




    $alunos = array(
        array(
            'matricula' => '255',
            'nome' => 'Fernando Rodrigues',
            'ano_nasc' => 1988,
            'cidade' => 'São Carlos',
        ),
        array(
            'matricula' => '233',
            'nome' => '',
            'ano_nasc' => '',
            'cidade' => '',
        ),
        array(
            'matricula' => '',
            'nome' => '',
            'ano_nasc' =>'' ,
            'cidade' => '',
        ),
        array(
            'matricula' => '',
            'nome' => '',
            'ano_nasc' => '',
            'cidade' => '',
        ),
        array(
            'matricula' => '',
            'nome' => '',
            'ano_nasc' => '',
            'cidade' => '',
        ),

    );
    ?>

    <ul>

        <?php foreach ($cursos as $apelido) { ?>

            <li>
                Título: <?php echo $apelido['titulo_curso']; ?><br>
                Autor: <?php echo $apelido['professor']; ?><br>
                valor: R$ <?php echo $apelido['valor']; ?><br>
                Descriçao do Curso: <?php print $apelido['descriçao']; ?>
            </li><br>

        <?php } ?>

    </ul>


    <h3>Array Push</h3>

    <!-- Criando um novo array -->
    <?php
    $aluno_novo = array();
    $aluno_novo['matricula'] = '25';
    $aluno_novo['nome'] = 'Carla da Silva';
    $aluno_novo['ano_nasc'] = '1996';
    $aluno_novo['cidade'] = 'Bahia';
    // Adicionando um novo array utilizando push
    array_push($alunos, $aluno_novo);
    // imprimindo com novo array
    echo "<pre>";
    print_r($alunos);
    echo "</pre>"; 

    ?>

     <h4>Alunos Nascidos depois de 1990: </h4>
    <br>

</body>

</html>