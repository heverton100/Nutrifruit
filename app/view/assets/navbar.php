<?php 

if(!isset($_SESSION)){
  session_start();
}

?>
<nav id="navbar" class="navbar">
	<ul>
		<li><a class="nav-link scrollto active" href="index.php">Principal</a></li>
		<li><a class="nav-link scrollto" href="frutas.php">Frutas</a></li>
		<li><a class="nav-link scrollto" href="mapfrutarias.php">Frutarias</a></li>
		<li><a class="nav-link scrollto" href="imc.php">Cálculo de IMC</a></li>
		<li><a class="nav-link scrollto" href="comparativo.php">Comparativo Informativo</a></li>
		
		<?php if(isset($_SESSION['NOMEUSER'])){ ?>

		<li><a class="getstarted scrollto" href="dashboard.php">Dashboard</a></li>

		<li>
			<div style="padding: 20px;display: flex;align-items: center;background-color: #66b775;color: white;">
				<i class="bx bxs-user-circle" style="font-size: 44px;color: #5cb874;float: left;width: 44px;height: 44px;background: #eaf6ed;display: flex;justify-content: center;align-items: center;border-radius: 50px;transition: all 0.3s ease-in-out;"></i>
				<h4 style="margin: 0;padding-left: 20px;"><?php echo $_SESSION['NOMEUSER']; ?></h4>
			</div>
		</li>

		<li><a class="nav-link scrollto" href="acc_logout.php">Sair</a></li>

		<?php }else{ ?>
		<li><a class="getstarted scrollto" href="acc_login.php">Conheça Mais</a></li>
		<?php }?>

	</ul>
	<i class="bi bi-list mobile-nav-toggle"></i>
</nav>