<?php

require_once 'UserDao.php';

class UserController extends UserDao {

	public function registraUser($nome, $email, $senha){

		$response = UserDao::registraUser($nome, $email, $senha);

		return $response;

	}

	public function checkEmail($email){

		$response = UserDao::checkEmail($email);

		return $response;

	}

	public function validaEmail($hash){

		$response = UserDao::validaEmail($hash);

		return $response;

	}

	public function loginUser($email,$senha){

		$response = UserDao::loginUser($email,$senha);

		return $response;

	}

	///////////

	public function salvaImc($idUser, $valor){

		$response = UserDao::salvaImc($idUser,$valor);

		return $response;

	}

	public function retornaListaImc($idUser){

		$response = UserDao::retornaListaImc($idUser);

		return $response;

	}

}

?>