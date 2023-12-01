<?php

require_once 'CategoriaFrutaDao.php';

class CategoriaFrutaController extends CategoriaFrutaDao {

	public function retornaCategorias(){

		$response = CategoriaFrutaDao::retornaCategorias();

		return $response;

	}

}

?>