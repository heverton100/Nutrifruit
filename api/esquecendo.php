<?php 

include("conexao.php");

	
    // Insert registration info 
    if(!empty($_POST)) { 
		try { 
			$email = $_POST['email']; 
			$pass = $_POST['password'];
			// Insert data 
			$sql_insert = "UPDATE users SET user_password = '$pass' WHERE user_email = '$email'";
			$stmt = $con->prepare($sql_insert);
			$stmt->execute(); 
		} 
		catch(Exception $e) { 
			die(var_dump($e)); 
		} 
    echo "<script>alert('Redefinição de senha feita com sucesso!')</script>";
	echo "<script>window.open('index.html','_self')</script>"; 
    } 
?>