<?php

require_once 'FrutaDao.php';

class FrutaController extends FrutaDao {

	public function retornaFrutas($categoriaID){

		$response = FrutaDao::retornaFrutas($categoriaID);

		return $response;

	}

	public function retornaInfo($frutaID){

		$response = FrutaDao::retornaInfo($frutaID);

		return $response;

	}

}

?>