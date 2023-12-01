<?php include 'assets/header.php'; ?>
<main id="main">
  <section id="about" class="about" style="background-color: #2d673c;">
    <div class="container">
      <div class="section-title" style="color: white;">
        <h2>Frutas</h2>
        <p style="color: white;" >Selecione a categoria que deseja informações</p>
      </div>
      <div class="row">
        <section id="featured-services" class="featured-services section-bg">
          <div class="container">
            <div id="retornoCategorias" class="row no-gutters" style="display: flex;flex-direction: column;align-items: center;">
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>

  $.post("../controller/CategoriaFrutaHandler.php?function=retorna_categorias", 
  {},
  function(result){
    $("#retornoCategorias").html(result);
  });

  </script>
</main>
<?php include 'assets/footer.php'; ?>

