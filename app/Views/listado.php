<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Codeigniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  

  <div class="container">
    <h1>Crud con Codeigniter 4</h1>
    <div class="row">
        <div class="col-sm-12">
            <form method = "POST" action ="<?php echo base_url().'/crear' ?>">
                
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">

                <label for="paterno">Apellido Paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control">

                <label for="materno">Apellido Materno</label>
                <input type="text" name="materno" id="materno" class="form-control">
                <br>
                <button class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

    
    <hr>

    <h2>Listado de personas</h2>
    <div class="row">
      <div class="col-sm-12">
        <div class="table table-responsive">
          <table class="table table-hover table-bordered">
            <tr>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          <?php foreach($datos as $key): ?>
              <tr>
                  <td><?php echo $key->nombre ?></td>
                  <td><?php echo $key->paterno ?></td>
                  <td><?php echo $key->materno ?></td>
                  <td>
                    <a href="<?php echo base_url().'/obtenerNombre/$key->id_nombre' ?>" class="btn btn-warning btn-sm">Editar</a>
                  </td>
                  <td>
                    <a href="<?php ?>" class="btn btn-danger btn-sm">Eliminar</a>
                  </td>
              </tr>
          <?php endforeach?>
          </table>
        </div>
      </div>

    </div>





  </div>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
      let mensaje = '<?php echo $mensaje?>';
      if(mensaje == '1'){
        swal(':D','Agregado con exito','success');
        
      }else if (mensaje=='0'){

        swal(':(','Falló al agregar','error');
      }
    </script>


  </body>
</html>