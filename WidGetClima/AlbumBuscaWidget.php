<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- 1. Link to jQuery (1.8 or later), -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

  <!-- fotorama.css & fotorama.js. -->
  <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <meta charset="utf-8">
  <title>Implementando utilidades</title>
  <link rel="stylesheet" href="practica5.css">
  <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
</head>
<body>

    <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="txtNombreCiudad">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btnCiudad">Search</button>
      </form>

    <section class="WidgetClima">
      <?php
      if (isset($_REQUEST['btnCiudad'])) {
        $ciudad = $_REQUEST['txtNombreCiudad'];
        switch ($ciudad){
          case "Los Mochis":echo'<div id="c_263e9e5869022227b2c5338db22eaa17" class="normal"></div><script type="text/javascript" src="https://www.clima.com/widget/widget_loader/263e9e5869022227b2c5338db22eaa17"></script>';
                            break;
          case "Guasave":echo '<div id="c_2c99a91702556b68b8e6b91808149c95" class="normal"></div><script type="text/javascript" src="https://www.clima.com/widget/widget_loader/2c99a91702556b68b8e6b91808149c95"></script>';
                        break;
          case "Ocoroni":echo '<div id="c_5b4753cd9dbef20ffb25e7dc0a04f04a" class="normal"></div><script type="text/javascript" src="https://www.clima.com/widget/widget_loader/5b4753cd9dbef20ffb25e7dc0a04f04a"></script>';
                        break;
        }
        
      }
      ?>
    </section>

    <!-- Galeria -->
    <div class="content fotorama">
      <img src="Imagenes2\1.jpg">
        <img src="Imagenes2\2.jpg">
        <img src="Imagenes2\3.jpg">
        <img src="Imagenes2\4.jpg">
        <img src="Imagenes2\1.jpg">
    </div>

    </div>

  </body>

  </html>
