<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../imagenes/Foto 2.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/index_cuauhtli.css" />
    <title>Index cuauhtli</title>
</head>

<body>
          <?php
              include("conexion_ima.php");

              $id = $_REQUEST['id'];
              $query = "SELECT * FROM imagen WHERE id='$id'";
              $resultado = $conexion->query($query);
              $row = $resultado->fetch_assoc();
          ?>
    <center><br/><br/><br/>
        <form action="proceso_modificar.php?id=<?php echo $row['$id']; ?>" method="POST" enctype="multipart/form-data">
            <input type="text" required name="nombre" placeholder="Nombre..." value="<?php echo $row ['nombre']; ?>"/><br/><br/>
            <img height = "100px" src= "data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/><br/><br/>
            <input type="file" required name="imagen"/><br/><br/>
            <input type="submit" value="Aceptar">
        </form>    
    </center> 
  </p>  

  <main class="news">
    <section class="post-list">
        <div class="content">
            <article class="post">
                <div class="post-header">
                    <div class="post-img-1"></div>    
                </div>     
                  <div class="post-body">
                    <span> 
                        UACM Cuautepec 2023.
                    </span>
                      <h2>Body Art</h2>
                        <p>
                           Pintura artistica de cuerepo
                           Tecnica: Oleo
                           Autor: Katia Rodriguez”.
                        </p>
                  </div>
            </article>

            <article class="post">
                <div class="post-header">
                    <div class="post-img-2"></div>
                </div>
                <div class="post-body">
                    <span> 
                        UACM Cuautepec
                        2023
                    </span>
                      <h2>Peregrinacion a Wirikuta</h2>
                          <p>
                              Autor: Julieta S. Negrete Bravo.
                              Medidas: 40 x 40 cm.
                              Tecnica: Hilo Crsital sobre madera.    
                          </p>
                 </div>
            </article>

            <article class="post">
                <div class="post-header">
                    <div class="post-img-3"></div>
                </div>
                <div class="post-body">
                    <span>UACM Cuautepec| 2023 </span>
                        <h2>Prometo no llamarte mas</h2>
                            <p>Autor: Guadalupe Chavez.
                               Tecnica: Pluma negra sobre papel fabreano.
                                <br>
                                <br>
                                <br>
                            </p>
                </div>
            </article>
          </div>
    </section>
</main>
<center><br/><br/><br/>
<iframe width="500" height="700" src="https://www.youtube.com/embed/P_6L5uABO5c?si=VU02b-JeJ1p9XLaX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</center>
</body>
</html>