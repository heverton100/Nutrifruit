<?php

// establishing the MySQLi connection

 

$con = mysqli_connect("br-cdbr-azure-south-b.cloudapp.net","b84b89912cf487","2a896771","meu_terceiro_db");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

?>