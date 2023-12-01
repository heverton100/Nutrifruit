<?php 

session_start();
include 'assets/header.php';

?>
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>NutriFruit</span></h2>
            <p class="animate__animated animate__fadeInUp">All About Fruits</p>
            <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="padding: 15px 15px;font-size: 30px;">
              <i class='bx bx-down-arrow-alt'></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<main id="main">
  <section id="contact" class="contact" style="padding-top: 30px;">
    <div class="container">
      <div class="section-title">
        <h2>Features</h2>
      </div>
      <div class="row">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info" style="display: flex;flex-wrap: wrap;justify-content: space-between;border: 0;">
            <a href="frutas.php" style="display: flex;flex-direction: column;align-items: center;background-color: #66b775;width: 100%;margin: 20px;color: white;padding-top: 15px;
    padding-bottom: 15px;" class="btn">
              <i style="margin-bottom: 10px;" class="bx bx-info-circle"></i>Frutas Informações
            </a>
            <a href="mapfrutarias.php" style="display: flex;flex-direction: column;align-items: center;background-color: #66b775;width: 100%;margin: 20px;color: white;padding-top: 15px;
    padding-bottom: 15px;" class="btn">
              <i style="margin-bottom: 10px;" class="bx bxs-map"></i>Frutarias
            </a>
            <a href="imc.php" style="display: flex;flex-direction: column;align-items: center;background-color: #66b775;width: 100%;margin: 20px;color: white;padding-top: 15px;
    padding-bottom: 15px;" class="btn">
              <i style="margin-bottom: 10px;" class="bx bxs-calculator"></i>Cálculo IMC
            </a>
            <a href="comparativo.php" style="display: flex;flex-direction: column;align-items: center;background-color: #66b775;width: 100%;margin: 20px;color: white;padding-top: 15px;
    padding-bottom: 15px;" class="btn">
              <i style="margin-bottom: 10px;" class="bx bxs-bar-chart-alt-2"></i>Comparativo Informativo
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<footer id="footer" style="background: #2d673c;">
  <div class="container">
    <h3>NutriFruit</h3>
    <div class="social-links">
      <a href="#" class="twitter"><i class="bx bxs-share-alt"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-youtube" ></i></a>
    </div>
  </div>
</footer>

<?php include 'assets/footer.php'; ?>