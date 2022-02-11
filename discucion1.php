<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Lector</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0"></h3>
    </div>
  </header>

  <main class="px-3">
    <h1>Lector de caracteres</h1>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Ingrese un caracter</label>
      <div class="input-group mb-3" style="justify-content: center;">
        <label class="input-group-text">Caracter</label>
        <form method="POST">
        <input type="text" name="monto" class="form-control" id="numero">
      </div>
    </div> 
      <button name="conv" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Convertir</button>
    </form>
    <?php
if(isset($_POST['conv'])  ){
    echo "<h3>";
    $caracter = $_POST['monto'];    
    if (is_numeric($caracter) and strlen($_POST['monto'])==1 ) {
        echo "Numero";
    }
    
    elseif (preg_match('/^[íóúéá]/i', $caracter)==1) {
      echo "Vocal con tilde";
    }
    
    elseif (is_string($caracter) and strlen($_POST['monto'])==1 ) {
      if (ctype_upper($caracter)) {
        if (preg_match('/^[AEIOU ]/i', $caracter)==1) {
          echo " Vocal mayuscula";
        }
        else {
          echo "Consonante mayuscula";
        }
      }
      
      elseif (!ctype_upper($caracter)) {
        if (preg_match('/^[aeiou]/i', $caracter)==1) {
          echo " Vocal sin tilde minuscula";
        }
        
        elseif (ord($caracter) >= 97 and ord($caracter) <= 122 ){
          echo "Consonante minuscula"; 
      }

      else{
        echo "simbolo";} 
      }
    }

    else {
      echo "El carácter ingresado no se puede procesar";
    }

    echo "</h3>";
  }
?>



  </main>

  <footer class="mt-auto text-white-50">
    <p>Realizado por Williams Amaya - Rubidia Paz</p>
  </footer>
</div>    
  </body>
</html>

