<?php

//Incluir conexao
    include("conexao.php");
    

//Obter dados
    $obterDados = file_get_contents("php://input");
    

//Extrair os dados do JSON
    $extrair = json_decode($obterDados);


//Separar os dados do JSON
    //$nomeCurso = $extrair-> cursos-> nomeCurso;   //cursos é o nome do JSON definido com json_encode
    //$valorCurso = $extrair-> cursos-> valorCurso; 
    $nomeCurso = $extrair->nomeCurso;
    $valorCurso = $extrair->valorCurso;


//SQL
   $sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
   mysqli_query($conexao, $sql);

//Exportar os dados cadastrados
    $curso = [
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ];

    //json_encode(['curso'=> $curso]);
    echo json_encode($curso);

?>