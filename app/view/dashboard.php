<?php include 'assets/header.php'; ?>
<main id="main" style="background-image: url(assets/img/slide/slide-1.jpg);background-color: rgba(45, 103, 60, 0.8);">
  <section id="about" class="about" style="background-color: rgba(45, 103, 60, 0.8);padding-top: 30px;">
    <div class="container">  
        
      <div class="row">
        <section id="featured-services" class="featured-services section-bg" style="background-color: transparent;">
          <div class="container" style="display: flex;justify-content: center;">
            <table style="width: 100%;">
              <thead>
                <tr>
                  <th colspan="2" style="padding-bottom: 30px;">
                    <h3 style="color: white;">Olá, <?php echo $_SESSION['NOMEUSER']; ?>!</h3>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr style="height: 150px;">
                  <td style="border: 1px white;border-style: solid;">
                    <a href="listimc.php" style="display: flex;flex-direction: column;align-items: flex-start;background-color: #3f7e4b;width: 100%;color: white;border-radius: 0;height: 150px;justify-content: space-around;" class="btn">
                      <i style="font-size: 30px;" class="bx bx-list-ul"></i>IMCs Salvos
                    </a>
                  </td>
                  <td style="border: 1px white;border-style: solid;">
                    <a href="#" style="display: flex;flex-direction: column;align-items: flex-start;background-color: #3f7e4b;width: 100%;color: white;border-radius: 0;height: 150px;justify-content: space-around;" class="btn">
                      <i style="font-size: 30px;" class="bx bx-info-circle"></i>Em Breve
                    </a>
                  </td>
                </tr>
                <tr style="height: 150px;">
                  <td style="border: 1px white;border-style: solid;">
                    <a href="#" style="display: flex;flex-direction: column;align-items: flex-start;background-color: #3f7e4b;width: 100%;color: white;border-radius: 0;height: 150px;justify-content: space-around;" class="btn">
                      <i style="font-size: 30px;" class="bx bx-info-circle"></i>Em Breve
                    </a>
                  </td>
                  <td style="border: 1px white;border-style: solid;">
                    <a href="#" style="display: flex;flex-direction: column;align-items: flex-start;background-color: #3f7e4b;width: 100%;color: white;border-radius: 0;height: 150px;justify-content: space-around;" class="btn">
                      <i style="font-size: 30px;" class="bx bx-info-circle"></i>Em Breve
                    </a>
                  </td>
                </tr>
      
                <tr colspan="2">
                  <td style="padding-top: 30px;">
                    <a href="acc_logout.php" style="display: flex;color: white;align-items: center;">
                      <i style="font-size: 30px;margin-right: 20px;" class="bx bx-log-out"></i>Sair
                    </a>
                  </td>
                </tr>

              </tbody>
            </table>

          </div>
        </section>
      </div>
    </div>
  </section>
</main>
<?php include 'assets/footer.php'; ?>