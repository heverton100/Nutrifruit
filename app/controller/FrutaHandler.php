<?php

require_once 'FrutaController.php';

$fc = new FrutaController;

switch($_GET["function"]) {

	case 'retorna_frutas':

		$result = $fc->retornaFrutas($_GET["CATEGORIAID"]);

		$table = '';

		while($resultado = mysqli_fetch_assoc($result)){

            $table .=        '<div class="icon-box" style="display: flex;justify-content: space-between;align-items: baseline;">';
			$table .=			'<div>';
			$table .=				'<img style="width: 100px;border: #66b775;border-style: solid;border-radius: 50px;" src="assets/img/frutas/'.$resultado['image'].'">';
			$table .=			'</div>';
			$table .=			'<h4 style="padding-left: 50px;">';
			$table .=				$resultado['nome'];
			$table .=			'</h4>';
			$table .=			'<button style="background: #5cb874;border: 0;transition: 0.4s;border-radius: 4px; margin-left: 50px;width: 50px;height: 50px;">';
			$table .=				'<a href="infonutricional.php?NOMEFRUTA='.$resultado['nome'].'&FRUTAID='.$resultado['frutaID'].'&FRUTAIMAGE='.$resultado['image'].'">';
			$table .=					'<i class="bx bx-search-alt" style="color:white;font-size: 19px;"></i>';
			$table .=				'</a>';
			$table .=			'</button>';
	        $table .=        '</div>';

		}
		
		echo $table;

		break;

	case 'retorna_info':

		$result = $fc->retornaInfo($_GET["FRUTAID"]);

		$table = '';

		while($resultado = mysqli_fetch_assoc($result)){

		    $table .=    '<tr>';
		    $table .=        '<th>'.$resultado['PROPRIEDADE'].'</th>';
		    $table .=        '<td>'.$resultado['VALOR'].' '.$resultado['UNIDADE'].'</td>';
		    $table .=    '</tr>';

		}
		
		echo $table;

		break;

}

?>