<?php

//Incluir conexao
    include("conexao.php");

//Obter dados
   // $obterDados = file_get_contents("php://input");

//Extrair os dados do JSON
  //  $extrair = json_decode($obterDados);
	

   //Separar os dados do JSON
   // $idCurso = $extrair-> cursos-> idCurso; 
  // $idCurso = $extrair->idCurso; //alterei aqui
   
   //OBTENDO DADOS VIA URL Não precisa do JSON já que pega via URL Exemplo para teste: http://localhost/php-pris/excluir?idCurso=3  
   $idCurso = $_GET["idCurso"];//aqui pega o valor de ?idCurso=3,no nosso caso,curso id 3 sera removido.
    
//SQL
    $sql = "DELETE FROM cursos WHERE idCurso = $idCurso";
    mysqli_query($conexao, $sql);


?>