<?php

require_once 'CategoriaFrutaController.php';

$cfc = new CategoriaFrutaController;

switch($_GET["function"]) {

	case 'retorna_categorias':

		$result = $cfc->retornaCategorias();

		$table = '';

		while($resultado = mysqli_fetch_assoc($result)){

			$table .= 	    '<div class="col-lg-4 col-md-6" style="text-align: center;">';
            $table .= 	    	'<div class="icon-box" style="padding: 10px;">';
            $table .= 	      		'<div class="icon" style="background-image: url(assets/img/'.$resultado['image'].'); background-size: cover; background-repeat: no-repeat;background-position-y: bottom;width: 100%;height: 100px;color: black;display: flex;flex-wrap: wrap;justify-content: center; align-content: flex-end;">';
            $table .= 	    			'<h4 class="title">';
            $table .= 	    				'<a style="color: white;font-size: 25px;" href="listfrutas.php?CATEGORIAID='.$resultado['categoriaID'].'&CATEGORIANOME='.$resultado['nome'].'">'.$resultado['nome'].'</a>';
            $table .= 	    			'</h4>';
            $table .= 	      		'</div>';
            $table .= 	      	'</div>';
            $table .= 	    '</div>';

		}
		
		echo $table;

		break;

}

?>