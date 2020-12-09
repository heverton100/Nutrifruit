<?php

include("conexao.php");


// checking the user

if(isset($_POST['login'])){

$email = mysqli_real_escape_string($con,$_POST['email']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

$sel_user = "select *from users where user_email='$email' AND user_password='$pass'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['user_email']=$email;

echo "<script>window.open('home.html','_self')</script>";

}

else {

echo "<script>alert('Email ou senha incorretos, tente novamente!')</script>";
echo "<script>window.open('index.html','_self')</script>";

}

}

?>