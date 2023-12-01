<?php include 'assets/header.php'; ?>
<main id="main">
  <section id="contact" class="contact" style="background-color: #2d673c;padding-top: 30px;">
    <div class="container">
      <div class="section-title" style="color: white;">
        <h2>IMC</h2>
        <p style="color: white;">Entre com os dados para efetuar o cálculo do Índice de Massa Corporal</p>
      </div>
      <div class="col-lg-7 mt-lg-0 d-flex align-items-stretch">
        <form action="" method="post" id="calcform" name="calcform" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="peso">Peso</label>
              <input type="text" name="peso" class="form-control" id="peso" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <label for="altura">Altura</label>
              <input type="text" class="form-control" name="altura" id="altura" required>
            </div>
          </div>
          <div class="text-center">
            <button type="submit">Calcular</button>
          </div>
          <div class="form-group col-md-6 mt-3 mt-md-0">
              <input type="text" name="res" id="res" class="form-control" placeholder="Resultado" disabled/>
          </div>
          <img src="assets/img/tabela-imc.png" style="width: 100%;">


          <?php if(isset($_SESSION['NOMEUSER'])){ ?>
          <div class="text-center">
              
              <button onclick="salvaimc()" id="salvarimc" style="background: #5cb874;border: 0;padding: 10px 24px;color: #fff;transition: 0.4s;border-radius: 4px;margin-top: 10px;" disabled>Salvar Resultado</button>

              <div id="msgretorno" class="sent-message" style="margin-top: 30px;display: none;">IMC gravado com sucesso!</div>

          </div>
          <?php }?>

        </form>
      </div>
    </div>
  </section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

  var my_func = function(event) {

      var valor1 = document.calcform.peso.value;
      var valor2 = document.calcform.altura.value;

      var altura2 = valor2.replace("," , ".");

      var res = valor1/(altura2*altura2); 

      document.calcform.res.value = res;

      event.preventDefault();

      $("#salvarimc").prop("disabled", false );

  };

  var form = document.getElementById("calcform");
  form.addEventListener("submit", my_func, true);

  //////

  function salvaimc(){
    var txt = $("#res").val();
    $.post("../controller/UserHandler.php?function=gravaimc", {valor: txt}, function(result){
      if (result == 1) {
        $("#msgretorno").css("display", "block");
        $("#salvarimc").prop("disabled", true );
      }else{
        $("#msgretornoemail").css("display", "none");
        $("#salvarimc").prop("disabled", false );
      }
    });
  }

</script>
<?php include 'assets/footer.php'; ?>