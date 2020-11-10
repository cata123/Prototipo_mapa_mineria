<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Mapa interactivo daño por minería</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="sasmin_logo_1.png" alt="imagen" height="40" width="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Acerca de</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Gestión de Información</a>
            <a class="nav-link" href="#">Contactenos</a>
          </div>
        </div>
      </nav>
      <div class="container-fluid container-fluid-datos">
          <div class="row">
              <div class="col-md-2 text-center">
                <a href="#"><img src="1.1.png" alt="imagen" id="grafica"></a>
                <p class="texto-grafica">Mineral Extraído</p>
              </div>
              <div class="col-md-2 text-center">
                <a href="#"><img src="1.2.png" alt="imagen" id="grafica"></a>
                <p class="texto-grafica">Tipo de daño</p>
              </div>
              <div class="col-md-2 text-center">
                <a href="#"><img src="1.3.png" alt="imagen" id="grafica"></a>
                <p class="texto-grafica">Afectación por región</p>
              </div>
              <div class="col-md-2">
                <a href="#"><img src="numero1.png" alt="imagen" id="numeros"></a>
              </div> 
              <div class="col-md-2">
                <a href="#"><img src="numero2.png" alt="imagen" id="numeros"></a>
              </div>  
      </div>
      </div>
      
        <div class="row">
            <div class="col-2">
                <br>
                <div class="list-group align-center" id="list-tab" role="tablist">
            <div class="btn-group-vertical">
                <select class="form-control form-control-sm">
                    <option>Antioqía</option>
                    <option>Regiones</option>
                    <option>Choco</option>
                    <option>Valle</option>
                    <option>Cesar</option>
                    <option>Guajira</option>
                  </select>
                  <br>
                  <br>
                  <br>
                  <select class="form-control form-control-sm">
                    <option>Pérdida de suelo por descapote</option>
                    <option>Daño al suelo</option>
                    <option>Deslizamientos / Desprendimientos</option>
                    <option>Aumento de la erosión</option>
                    <option>Disposición inadecuada de residuos solidos</option>
                  </select>
                  <br>
                  <br>
                  <br>
                  <select class="form-control form-control-sm">
                    <option>Aluvial</option>
                    <option>Cantera</option>
                    <option>Tipo de Extracción</option>
                    <option>A tajo abierto</option>
                    <option>En canal</option>
                  </select>
                  <br>
                  <br>
                  <br>
                  <select class="form-control form-control-sm">
                    <option>Materiales de construcción</option>
                    <option>Mineral extraido</option>
                    <option>Carbón</option>
                    <option>Oro</option>
                    <option>Niquél</option>
                  </select>
              </div> 
              
              </div>
              <br>
        <br>
        <br>
        <button type="submit" class="btn btn-info btn-info-buscar">Enviar</button> 
        <br>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <div style="position: relative; left: 0; top: 0;">
          <img class="mapa" src="mapa-antioquia_1.png" alt="mapa-antioquia" id="mapa-antioquia">
          <a href="#" data-toggle="modal" data-target="#miModal">
            <img class="punto" src="punto.png" alt="punto" height="20" width="30"></a>
        </div>
        <!--modal-->
<div class="modal fade" id="miModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--header-->
            <div class="modal-header">
                <h4 class="modal-title">Información Detallada del Impacto</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!--body-->
            <div class="modal-body">
                <?php
                include("listar.php");
                ?>
            </div>
            <!--footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
    
      
        <div class='main'>
        <footer class="footer">
        <div class="container-fluid"> 
        <div class="row">  
        <div class="col-sm-7 mb-2">
            <br>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="row col-md-5 offset-md-5">
              <button type="submit" class="btn btn-primary mb-2 text-center" id="boton-daño">Ver Daño</button>
            </div>
        </div>
        <div class="col-sm-5">
            <br> 
        <form class="form-inline">
            <div class="col-sm-2">
            <a href="#"><img src="NicePng_esri-logo-png_7172573.png" alt="imagen" height="30" width="70"></a>
            </div>
            <div class="form-group mb-2 col-sm-5">
            <label for="staticEmail2" class="sr-only">Email</label>
              <input type="text" readonly class="form-control" id="staticEmail2" value="email@example.com">
              
            </div> 
            <button type="submit" class="btn btn-primary mb-2 text-center">Escríbanos</button>
          </form>
          </div>
    </div>
    </div>
  </footer>
</div>
  
</body>
</html>
