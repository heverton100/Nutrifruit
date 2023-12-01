<?php include 'assets/header.php'; ?>
<main id="main">
  <section id="contact" class="contact" style="background-color: #2d673c;">
    <div class="container">
      <div class="section-title" style="color: white;">
        <h2 >Login</h2>
      </div>
      <div class="col-lg-7 mt-lg-0 d-flex align-items-stretch">
        <form action="../controller/UserHandler.php?function=login" method="post" role="form" class="php-email-form" id="formlogin">
          <div class="row">
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input placeholder="E-mail" type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input placeholder="Senha" type="password" class="form-control" name="senha" id="senha" required>
            </div>
          </div>
          <div class="text-center mt-3">
            <button id="loginacc" type="submit">Login</button>
          </div>

          <div id="msgretornoemail" style="padding: 10px;background-color: #203a74;margin-bottom: 10px;text-align: center;color: white;display: none; margin-top: 20px;"></div>

          <p style="text-align: center;margin-top: 20px;">Ainda não possui cadastro? <a href="acc_signup.php">Clique aqui</a> para se cadastrar.</p>

        </form>
      </div>
    </div>
  </section>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">

  $(document).on('submit','#formlogin',function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
      url: '../controller/UserHandler.php?function=login',
      method: 'post',
      dataType: 'html',
      data: dados,
      success: function(data){

        if (data == 1) {
          setTimeout(function() { location.href="index.php"; }, 3000);
        }else{
          $("#msgretornoemail").css("display", "block");
          $("#msgretornoemail").html(data);
        }

      }
    });

  });

</script>

<?php include 'assets/footer.php'; ?>