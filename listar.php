<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    <?php
    /*include("informe.php");*/
    require("conectar.php");
    $registros=mysqli_query($conexion, "select id_informe,lugar,mina,impacto,solucion,autor_impacto,autor_solucion from informe") or 
    die("Problemas en el select:" . mysqli_error($conexion));
    $total=0;
    while ($reg = mysqli_fetch_array($registros)){

    echo "<h3>Lugar</h3>" . $reg['lugar'] . "<<br>";
    echo "<h3> Mina </h3>" . $reg['mina'] . "<br>";
    echo "<h3> Impacto </h3>" . $reg['impacto'] . "<br>";
    echo "<h3> Solución </h3>" . $reg['solucion'] . "<br>";
    echo "<h3> Autor Impacto </h3>" . $reg['autor_impacto'] . "<br>";
    echo "<h3> Autor Solución</h3>" . $reg['autor_solucion'] . "<br>";
    }
    ?>

   <!--<br><br><center>
    <a href="informe.php" class="btn btn-danger" role="button">Volver</a>
    </center>-->
</div>
</body>
</html>