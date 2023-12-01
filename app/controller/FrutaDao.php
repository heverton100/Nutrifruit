<?php

require_once '../conf/ConexaoOO.php';

class FrutaDao extends ConexaoOO {

	public function retornaFrutas($categoriaID){

		$conn = ConexaoOO::connection();

		$query = "SELECT * FROM Fruta WHERE categoriaID = ". $categoriaID;
		$result = mysqli_query($conn, $query);

		return $result;

	}

	public function retornaInfo($frutaID){

		$conn = ConexaoOO::connection();

		$query = "SELECT PROP.nome AS PROPRIEDADE,
					INF.valor AS VALOR,
					PROP.unidade AS UNIDADE
					FROM `InfoNutricional` INF
					INNER JOIN Fruta FRU ON INF.frutaID = FRU.frutaID
					INNER JOIN Propriedades PROP ON INF.propriedadeID = PROP.propriedadeID
					WHERE FRU.frutaID =". $frutaID;
		$result = mysqli_query($conn, $query);

		return $result;

	}

}

?>