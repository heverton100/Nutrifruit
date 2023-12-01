<?php
$hash = $_GET['hash'];
?>
<h1>Seu e-mail foi validado com sucesso!</h1>
<p>Em 5 segundos esta guia será encerrada automaticamente</p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	$.ajax({
	    type: 'GET',
	    url: '../controller/UserHandler.php?function=validaremail&hash=<?php echo $hash; ?>'
	}).then(function (data) {
		setTimeout(function() { window.close(); }, 5000);
	});
</script>