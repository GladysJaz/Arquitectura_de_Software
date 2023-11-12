<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <link rel="shortcut icon" href="../imagenes/uacm.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/portada.css" />

    <title>CUAUHTLI</title>
  </head>
  <body>
    <header>
      <div class="menu container">
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img src="" class="menu-icono" alt="" />
        </label>
       
      </div>

      <div class="header-content container">
        <div class="content">
          <h3>
            <em
              ><i><h1>CUAUHTLI</h1></i></em
            >
          </h3>
          <p>En esta página encontrarás una gran diversidad cultural</p>
          <a href="informacion.html" class="btn-1">Da click para más informacion</a>
        </div>

        <form action="../PHP/validar.php" method="GET">
          <input type="hidden" name="cerrar_sesion" value="true">
          <button type="submit">Finalizar Sesión</button>
      </form>

        <img
          src="../imagenes/ajolote.png"
          alt=""
          class="Ajolote"
          height="200"
          width="400"
        />
      </div>
    </header>

    <main class="services container">
      <div class="service">
        <a href="cuauhtli.html">
          <img src="../imagenes/ayolote.png" alt="" class="mediana" height="5" width="2"/>
        </a>
        <h3>CUAUHTLI</h3>
        <p>
          Averigua lo grandioso que puede ser esta página consultando los menú
          que aparecen al principio de dicha página.
        </p>
      </div>

      <div class="service">
        <a href="nosotros.html">
          <img src="../imagenes/people.png" alt="" class="mediana" height="5" width="2" />
        </a>
        <h3>NOSOTROS</h3>
        <p>
          Nosotros, es una seccion donde podrás conocer nuestra Misión, Visión y
          valores que nos orilló hacer esta página para los estudiantes de la
          UACM.
        </p>
      </div>

      <div class="service">
        <a href="solicitarEspacio.html">
          <img src="../imagenes/cultura.png" alt="" class="mediana" height="5" width="2"/>
        </a>
        <h3>SOLICITAR ESPACIO</h3>
        <p>
          Te encantará saber que en la sección SolitictaEspacio podrás ver una
          gran diversidad de arte.
        </p>
      </div>

      <div class="service">
        <a href="noticias.html">
          <img src="../imagenes/news.png" alt="" class="mediana" height="5" width="2" />
        </a>
        <h3>NOTICIAS</h3>
        <p>
          Al día dia con las noticias que se presentan en el aspecto artisticos
          de la UACM
        </p>
      </div>

      <div class="service">
        <a href="contactos.html">
          <img src="../imagenes/contact.png" alt="" class="mediana" height="5" width="2"/>
        </a>
        <h3>CONTÁCTANOS</h3>
        <p>
          Tienes duda o sugerencias, este es el mejor medio para poder hacerlo.
        </p>
      </div>
    </main>

   
<hr>
       
  </body>
</html>
