<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@700&display=swap" rel="stylesheet">

   <!-- Font Awesome -->
<!-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>-->
<!-- Google Fonts -->
<!--  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>-->

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
  rel="stylesheet"
/>
    <title>Control Bosch</title>
</head>
<body>
  <img class="imagen-redvalor" src="img/logotipo-redvalor.png" width="350" height="180"alt="">
<form action="index_back.php" method="POST" class="vh-100 gradient-custom">
      <div class="container py-0 h-0">
        <div class="row d-flex justify-content-center align-items-center h-0" >
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="principal" class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-4 text-center">
                  <div class="imagen-redvalor">
                    <img src="img/isologotipo-redvalor.png" widht="150" height="150" alt="">
                  </div> 
                  <br>
                <div class="letra" class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2">Control Stock</h2>
                  <p class="text-white-90"></p>

                  <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input placeholder="Usuario" type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1"></label>
                    <input placeholder="Clave" type="password" name="clave" class="form-control" id="exampleInputPassword1">
                  </div>

                  <br>
                  <br>

                  <button type="submit" class="boton">Iniciar Sesión</button>
                  <br>
                  <br>
                  <!-- <a href="registro.php"  class="btn btn-light" tabindex="-1" role="button" aria-disabled="false">Registrarse</a> -->
                </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>