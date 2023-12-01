<?php

require_once '../conf/ConexaoOO.php';

class UserDao extends ConexaoOO {

	public function registraUser($nome, $email, $senha){

		$conn = ConexaoOO::connection();

		$query = "INSERT INTO Usuario (nome
			, email
			, senha
			, email_confirmado
			, token
			, date_create)
		VALUES ('$nome'
			,'$email'
			,'$senha'
			,0
			,'".md5($email)."'"."
			,NOW())";

		$result = mysqli_query($conn, $query);

		return $result;

	}

	public function checkEmail($email){

		$conn = ConexaoOO::connection();

		$select_email = "SELECT email FROM Usuario WHERE email = '".$email."'";
		$result_email = mysqli_query($conn, $select_email);
		$row_email = mysqli_fetch_assoc($result_email);

		return $row_email;
	}

	public function validaEmail($hash){

		$conn = ConexaoOO::connection();

		$update = "UPDATE Usuario SET email_confirmado = 1 WHERE token = '".$hash."'";

		if (!mysqli_query($conn, $update)) {
		  echo "Error: " . $update . "<br>" . mysqli_error($conn);
		  exit();
		}

		return 'ok';
	}

	public function loginUser($email,$senha){

		$conn = ConexaoOO::connection();

		$query = "SELECT * FROM Usuario WHERE email = '$email' && senha = '$senha' LIMIT 1";
		$result = mysqli_query($conn, $query);
		$resultado = mysqli_fetch_assoc($result);

		return $resultado;
	}

	/////////////////

	public function salvaImc($idUser, $valor){

		$conn = ConexaoOO::connection();

		$query = "INSERT INTO Imc (usuarioID
			, valor
			, date_create)
		VALUES ($idUser
			, $valor
			, NOW())";

		$result = mysqli_query($conn, $query);

		return $result;

	}

	public function retornaListaImc($idUser){

		$conn = ConexaoOO::connection();

		$query = "SELECT * FROM Imc WHERE usuarioID = ". $idUser;
		$result = mysqli_query($conn, $query);

		return $result;

	}

}

?>