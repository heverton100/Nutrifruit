<?php
session_start();
session_destroy();
?>

<?php include 'assets/header.php'; ?>
<h1 style="margin-left: 10px;margin-top: 100px;">Saindo...</h1>
<script type="text/javascript">

	setTimeout(function() { location.href="index.php"; }, 3000);

</script>

<?php include 'assets/footer.php'; ?>