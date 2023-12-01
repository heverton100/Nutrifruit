<?php include 'assets/header.php'; ?>
<main id="main">
  <section id="contact" class="contact" style="background-color: #2d673c;">
    <div class="container">
      <div class="section-title" style="color: white;">
        <h2 >Cadastro</h2>
        <p style="color: white;">Faça o cadastro e receba novidades</p>
      </div>
      <div class="col-lg-7 mt-lg-0 d-flex align-items-stretch">
        <form action="../controller/UserHandler.php?function=registrar" method="post" role="form" class="php-email-form" id="formcadastro">
          <div class="row">
            <div class="form-group col-md-6">
              <input placeholder="Nome" type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input placeholder="E-mail" type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input placeholder="Senha" type="password" class="form-control" name="senha1" id="senha1" onkeyup="Verifica()" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input placeholder="Repita a senha" type="password" class="form-control" name="senha2" id="senha2" onkeyup="Verifica()" required>
            </div>
          </div>
          <div class="text-center mt-3">
            <button id="cadastroacc" type="submit">Cadastrar</button>
          </div>
          
          <div id="msgretorno" class="sent-message" style="margin-top: 30px;display: none;">Cadastro efetuado com sucesso! Verifique seu E-mail para confirmar!</div>

          <div id="msgretornoemail" style="padding: 10px;background-color: #203a74;margin-bottom: 10px;text-align: center;color: white;display: none; margin-top: 20px;">Este e-mail já está cadastrado!</div>

          <p style="text-align: center;margin-top: 20px;">Já possui cadastro? <a href="acc_login.php">Clique aqui</a> para fazer o login.</p>

        </form>
      </div>
    </div>
  </section>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">

  $(document).on('submit','#formcadastro',function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
      url: '../controller/UserHandler.php?function=registrar',
      method: 'post',
      dataType: 'html',
      data: dados,
      success: function(data){

        if (data == 1) {
          $("#msgretorno").css("display", "block");
          setTimeout(function() { location.href="acc_login.php"; }, 5000);
        }else{
          $("#msgretorno").css("display", "none");
          alert(data);
        }

      }
    });

  });

  function Verifica(){
    val1=document.getElementById("senha1").value;
    val2=document.getElementById("senha2").value;
    if(val1!=val2){
      document.getElementById("senha1").style.borderColor="#f00";
      document.getElementById("senha2").style.borderColor="#f00";
      $("#cadastroacc").prop("disabled", true );
    }else{
      document.getElementById("senha1").style.borderColor="#0f0";
      document.getElementById("senha2").style.borderColor="#0f0";
      $("#cadastroacc").prop("disabled", false );
    }
  }

  $("#email").blur(function(){
    var txt = $("#email").val();
    if (txt != '') {
      $.post("../controller/UserHandler.php?function=verificaemail", {email: txt}, function(result){
        if (result == 1) {
          $("#msgretornoemail").css("display", "block");
          $("#cadastroacc").prop("disabled", true );
        }else{
          $("#msgretornoemail").css("display", "none");
          $("#cadastroacc").prop("disabled", false );
        }
      });
    }
  });

</script>
<?php include 'assets/footer.php'; ?>