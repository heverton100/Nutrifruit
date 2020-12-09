<?php 
/*     // DB connection info 
    //TODO: Update the values for $host, $user, $pwd, and $db 
    //using the values you retrieved earlier from the Azure Portal. 
    $host = "br-cdbr-azure-south-b.cloudapp.net"; 
    $user = "b84b89912cf487"; 
    $pwd = "v2a896771"; 
    $db = "meu_terceiro_db"; 
    // Connect to database. 
    try { 
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd); 
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
    } 
    catch(Exception $e){ 
        die(var_dump($e)); 
    }  */
	
	include("conexao.php");

    // Insert registration info 
    if(!empty($_POST)) { 
    try { 
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $pass = $_POST['pass'];
        // Insert data 
        $sql_insert = "INSERT INTO users (user_name, user_email, user_password) 
                   VALUES ('$name','$email','$pass')"; 
        $stmt = $con->prepare($sql_insert);  
        $stmt->execute(); 
    } 
    catch(Exception $e) { 
        die(var_dump($e)); 
    }
	echo "<script>alert('Você foi registrado com sucesso!')</script>";
	echo "<script>window.open('index.html','_self')</script>";
	
    } 
?>