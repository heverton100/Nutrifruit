<?php include 'assets/header.php'; ?>
<main id="main">
  <section id="about" class="about" style="background-color: #2d673c;">
    <div class="container">
      <div class="section-title" style="color: white;">
        <h2>Frutas <?php echo $_GET['CATEGORIANOME']; ?></h2>
      </div>
      <div class="row">
        <section id="featured-services" class="featured-services section-bg">
          <div class="container">
            <div id="retornoListaFruta" class="row no-gutters" style="display: flex;flex-direction: column;align-items: center;">
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    
    $.post("../controller/FrutaHandler.php?function=retorna_frutas&CATEGORIAID=<?php echo $_GET['CATEGORIAID']; ?>", 
    {},
    function(result){
      $("#retornoListaFruta").html(result);
    });

  </script>
</main>
<?php include 'assets/footer.php'; ?>


