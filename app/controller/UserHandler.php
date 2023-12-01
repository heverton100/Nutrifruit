<?php

session_start();

require_once 'UserController.php';
require_once 'EnvioEmail.php';

$uc = new UserController;
$ee = new EnvioEmail;

switch($_GET["function"]) {

	case 'registrar':

		$nome = $_POST['name'];
		$email = $_POST['email'];
		$senha = md5($_POST['senha1']);
		
		$result = $uc->registraUser($nome,$email,$senha);

		if($result == 1){
			$enviaemail = $ee->envia_email_confirmacao($email,$nome);
		}
		
		echo $result;

		break;

	case 'verificaemail':

		$email = $_POST['email'];

		$response = $uc->checkEmail($email);

		if (isset($response['email'])) {
			echo "1";
		}else{
			echo "0";
		}

		break;

	case 'validaremail':

		$hash = $_GET["hash"];

		$response = $uc->validaEmail($hash);

		break;

	case 'login':

		$email = $_POST['email'];
		$senha = md5($_POST['senha']);

		$response = $uc->loginUser($email,$senha);

		if (isset($response['email'])) {
			if ($response['email_confirmado'] != 1) {
				echo "E-mail não validado!";
			}else{
				$_SESSION['NOMEUSER'] = $response['nome'];
				$_SESSION['IDUSER'] = $response['usuarioID'];
				sleep(1);
				echo "1";
			}
		}else{
			echo "Dados incorretos!";
		}

		break;

	case 'gravaimc':

		$iduser = $_SESSION['IDUSER'];
		$valor = $_POST['valor'];

		$response = $uc->salvaImc($iduser,$valor);

		echo $response;

		break;

	case 'retornalistaimc':

		$iduser = $_SESSION['IDUSER'];

		$result = $uc->retornaListaImc($iduser);

		$table = '';

		while($resultado = mysqli_fetch_assoc($result)){

			$date = date_create($resultado['date_create']);

		    $table .=    '<tr>';
		    $table .=        '<td>'.$resultado['imcID'].'</td>';
		    $table .=        '<td>'.number_format($resultado['valor'], 5 ,",",".").'</td>';
		    $table .=        '<td>'.date_format($date,"d/m/Y H:i:s").'</td>';
		    $table .=    '</tr>';

		}
		
		echo $table;

		break;

}

?>