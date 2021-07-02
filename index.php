<html>
  <head>
    
    <title>Calculadora de precios - SOS Music</title>
    
    <!-- Bootstrap Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  </head>
  <body class="container pt-5">
    <div class="mx-auto .col-sm- card shadow" style="max-width: 600px">
      <div class="card-header">
        <h2>Calculadora SOS Music</h2>
      </div>
      <div class="card-body">
        <form class="" action="">
          <h3 class="">Selecciona el almacenamiento que necesites</h3>
          <div class="p-3">
            <div class="form-check">
              <input class="form-check-input" type="radio" id="license1"
              name="license" value="200" checked>
              <label for="started">10 GB - Started</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="license2"
              name="license" value="300">
              <label for="academy">30 GB - Music Academy</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="license3"
              name="license" value="500">
              <label for="school">60 GB - Music School</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="license4"
                name="license" value="800">
                <label for="university">100 GB - Music University</label>
            </div>
          </div>
        
          <h3>Indica el número de licencias que necesites</h3>
          <div class="row p-3">
            <input class="col-2" type="number" name="users" min="10" value="10">
            <div class="col">
              <label for="users">unidades</label>
            </div>
          </div>
          <div class="mt-3">
            <button class="btn btn-primary mr-4 btn-lg" type="submit">Calcular precio</button>
          </div>
            
          <div class="php-logic mt-4 alert alert-success">

                    <?php
                      if(isset($_GET['license']) && isset($_GET['users'])) {
                        $license = $_GET['license'];
                        $users = $_GET['users'];
                        $userPrice = 97;

                        function descuento ($users) {
                          if($users>=500) {
                            $userPrice = 67.9;
                          } elseif($users>=200 && $users<500) {
                            $userPrice = 72.75;
                          } elseif($users>=100 && $users<200) {
                            $userPrice = 77.6;
                          } elseif($users>=50 && $users<100) {
                            $userPrice = 82.4;
                          } elseif($users>=10 && $users<50) {
                            $userPrice = 92;
                          }
                          return $userPrice;
                        }

                        $total= $license + (descuento($users) * $users);
                        echo "<h5>TOTAL: $total"."€</h5>";
                      } else {
                        echo "<h5>Por favor selecciona el almacenamiento que necestites.</h5>";
                      }

                    ?>

          </div>
        </form>
      </div>
    </div>

    <!-- Bootstrap Scripts --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>