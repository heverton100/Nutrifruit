<?php 

include('conexao.php');
	include('conexao.php');
	
    // Insert registration info 
    if(!empty($_POST)) { 
		try { 
			$name = $_POST['nome']; 
			$email = $_POST['email']; 
			$telefone = $_POST['telefone'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$frutaPreferida = $_POST['frutaPreferida'];
			// Insert data 
			$sql_insert = "INSERT INTO subscribers (sub_name, sub_email, sub_phone,sub_city,sub_state,sub_fruit) 
					   VALUES ('$name','$email','$telefone','$cidade','$estado','$frutaPreferida')"; 
			$stmt = $con->prepare($sql_insert);
			$stmt->execute(); 
		}catch(Exception $e) { 
			die(var_dump($e)); 
		} 
		echo "<script>alert('Cadastro feito com sucesso! Em breve você receberá em seu e-mail mais informações.')</script>";
		echo "<script>window.open('cadastro.html','_self')</script>"; 
    } 
?>