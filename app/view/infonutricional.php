<?php include 'assets/header.php'; ?>
<main id="main">
  <section id="about" class="about" style="background-color: #2d673c;">
    <div class="container">
      <div class="section-title" style="color: white;">
        <h2>Informações Nutricionais</h2>
        <img style="width: 100px;border: #66b775;border-style: solid;border-radius: 50px;" src="assets/img/frutas/<?php echo $_GET['FRUTAIMAGE']; ?>">
        <h4 style="margin-top: 20px;"><?php echo $_GET['NOMEFRUTA']; ?></h4>
      </div>
      <div class="row">
        <section id="featured-services" class="featured-services section-bg">
          <div class="container">
            <div class="row no-gutters" style="display: flex;flex-direction: column;align-items: center;">
              <table id="myTable" class="table table-striped">
                  <thead>
                      <tr>
                          <th style="text-align: center;" colspan="2">Quantidade avaliada: 100 gramas</th>
                      </tr>
                      <tr>
                          <th style="background-color: #66b78b;color: white;">Propriedade</th><th style="background-color: #66b78b;color: white;">Valor</th>
                      </tr>
                  </thead>
                  <tbody id="retornoTabela">
                      <tr>
                          <th>Propriedade</th>
                          <td>Valor</td>
                      </tr>
                  </tbody>
              </table>
            </div>
            <div class="text-center">
              <button onclick="history.go(-1);" style="background: #5cb874;border: 0;padding: 10px 24px;color: #fff;transition: 0.4s;border-radius: 4px;margin-top: 10px;">Voltar</button>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">

  $(document).ready( function () {
      $('#myTable').DataTable({
        info: false,
        ordering: false,
        paging: false,
        searching: false
      });
  });

  $.post("../controller/FrutaHandler.php?function=retorna_info&FRUTAID=<?php echo $_GET['FRUTAID']; ?>", 
  {},
  function(result){
    $("#retornoTabela").html(result);
  });

</script>
<?php include 'assets/footer.php'; ?>
