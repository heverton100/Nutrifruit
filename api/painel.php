<?php

include('conexao.php');

// Retrieve data 
    $query = "SELECT * FROM subscribers"; 
		
		
		if ($result = $con->query($query)) {

    /* fetch associative array */
	    echo "<h2>Pessoas cadastradas:</h2>"; 
        echo "<table>"; 
        echo "<tr><th>Nome</th>"; 
        echo "<th>Email</th>"; 
		echo "<th>Telefone</th>"; 
		echo "<th>Cidade</th>"; 
		echo "<th>Estado</th>"; 
        echo "<th>Fruta Preferida</th></tr>"; 
	
    while ($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row["sub_name"]."</td><td>".$row["sub_email"]."</td>
		<td>".$row["sub_phone"]."</td><td>".$row["sub_city"]."</td>
		<td>".$row["sub_state"]."</td><td>".$row["sub_fruit"]."</td></tr>";
    }
	echo "</table>";
    /* free result set */
    $result->close();
}
 
     
?>