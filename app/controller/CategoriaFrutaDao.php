<?php

require_once '../conf/ConexaoOO.php';

class CategoriaFrutaDao extends ConexaoOO {

	public function retornaCategorias(){

		$conn = ConexaoOO::connection();

		$query = "SELECT * FROM CategoriaFrutas";
		$result = mysqli_query($conn, $query);

		return $result;
	}

}

?>