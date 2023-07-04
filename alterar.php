<?php

//Incluir conexao
    include("conexao.php");

//Obter dados
    $obterDados = file_get_contents("php://input");

//Extrair os dados do JSON
    $extrair = json_decode($obterDados);

//Separar os dados do JSON
	$idCurso    = $extrair->idCurso; 
	$nomeCurso  = $extrair->nomeCurso;
    $valorCurso = $extrair->valorCurso;
    
//SQL
    $sql = "UPDATE cursos SET nomeCurso = '$nomeCurso', valorCurso = $valorCurso WHERE idCurso = $idCurso";
//Executando o SQL	
    mysqli_query($conexao, $sql);

//Exportar os dados cadastrados
    $curso=[
        'idCurso' => $idCurso,
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ];
	
   echo json_encode(['curso'=>$curso]); //apresentar os dados alterados

    //API ok testada no POSTMAN chamada:
   //http://localhost/php-pris/alterar.php  
   //dados via JSON
   //Ex.:
  // {
  //  "idCurso":114,
 //   "nomeCurso": "Java 8",
  //  "valorCurso": "400"
  // } 
?>