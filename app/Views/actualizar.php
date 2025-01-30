
<?php
    $idNombre = $datos[0] ['id_nombre'];
    $nombre = $datos[0] ['nombre'];
    $paterno = $datos[0] ['paterno'];
    $materno = $datos[0] ['materno'];
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualiza un Nombre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    



  <div class="container">
    <h1>Crud con Codeigniter 4</h1>

      <div class="row">
        <div class="col-sm-12">
            <form method = "post" action ="<?php echo base_url().'/actualizar' ?>">
                
                <input type="text" id="idNombre" name="idNombre" hidden="" 
                value="<?php echo $idNombre?>">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" 
                value="<?php echo $nombre?>">

                <label for="paterno">Apellido Paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control" 
                value="<?php echo $paterno?>">

                <label for="materno">Apellido Materno</label>
                <input type="text" name="materno" id="materno" class="form-control" 
                value="<?php echo $materno?>">
                <br>
                <button class="btn btn-warning">Guardar</button>
            </form>
        </div>
    </div>
  </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>