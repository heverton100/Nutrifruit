<?php include 'assets/header.php'; ?>
<main id="main">
  <section id="about" class="about" style="background-color: #2d673c;padding-top: 30px;" >
    <div class="container">
      <div class="section-title" style="color: white;">
        <h2>Comparativo Interativo</h2>
      </div>
      <div class="row">
        <section id="featured-services" class="featured-services section-bg">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-7 col-sm-7 scrollpoint sp-effect1">
                    <select class="form-control" style="width: 100%;height: 50px;font-size:20px" id="mySelect" onchange="myFunction()">
                      <option value="">Selecione</option>
                      <option value="Calorias">Calorias</option>
                      <option value="Gorduras">Gorduras</option>
                      <option value="Sodio">Sódio</option>
                      <option value="Potassio">Potássio</option>
                    </select>
                    <br>
                    <iframe width="100%" height="470px" id="myFrame" seamless frameborder="0" scrolling="yes" src="https://docs.google.com/spreadsheets/d/13x-TVNImRdqSRFNq2JNbdeXm-WWOeq39c9s7uq7Pm0k/pubchart?oid=225850387&amp;format=interactive"></iframe>
                  </div>     
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <script>
  function myFunction() {

    var x = document.getElementById("mySelect").value;

    if (x=="Calorias"){

      document.getElementById("myFrame").src = "https://docs.google.com/spreadsheets/d/13x-TVNImRdqSRFNq2JNbdeXm-WWOeq39c9s7uq7Pm0k/pubchart?oid=225850387&amp;format=interactive";

    }else if (x=="Gorduras"){

      document.getElementById("myFrame").src = "https://docs.google.com/spreadsheets/d/13x-TVNImRdqSRFNq2JNbdeXm-WWOeq39c9s7uq7Pm0k/pubchart?oid=511254022&amp;format=interactive";

    }else if (x=="Sodio"){

      document.getElementById("myFrame").src = "https://docs.google.com/spreadsheets/d/13x-TVNImRdqSRFNq2JNbdeXm-WWOeq39c9s7uq7Pm0k/pubchart?oid=1564600681&amp;format=interactive";

    }else if (x=="Potassio"){

      document.getElementById("myFrame").src = "https://docs.google.com/spreadsheets/d/13x-TVNImRdqSRFNq2JNbdeXm-WWOeq39c9s7uq7Pm0k/pubchart?oid=1859671087&amp;format=interactive";

    }else {

      alert("Selecione uma opção");

    }
  }
  </script>
</main>
<?php include 'assets/footer.php'; ?>