<?php
    //Conectando ao banco de dados
	header('Access-Control-Allow-Origin: *');
include("conexao.php");
    
    //Consultando banco de dados
    $qryLista = mysqli_query($con, "select fru_nome, fru_qtde_avaliada, fru_calorias, fru_gorduras_totais, fru_sodio, fru_potassio, fru_carboidratos, fru_acucar, fru_proteinas, fru_vitamina_a, fru_calcio, fru_vitamina_c, fru_ferro, fru_magnesio from tblfrutas where fru_nome='Pera'");    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
    }    
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>