<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/bootswtach/bootstrap.min.css">
</head>

<body>


     
    <nav class="navbar  navbar-dark bg-dark p-3">
        <a href="#" class="navbar-brand" href="#">App de tareas</a>

        <ul class="">
            <form class="form">
                <div class="row mt-1">
                <input type="search" id="buscar" class="form-control col" placeholder="Buscar tarea">
                <button class="btn btn-success   col-md-4 mx-1" type="submit">Buscar</button>
                </div>
            </form>
        </ul>
    </nav>
     
    
    <div class="container">
        <div class="row">
            <div class="col-md-5 mt-2">
                <div class="card">
                    <div class="card-body">
                        <form id="formulario-guardar">
                          <div class="form-group">
                            <input type="text" id="nombre" name="nombre" placeholder="nombre" class="form-control">
                            <textarea cols="30" rows="10" name="descripcion" type="text" id="descripcion" placeholder="Descripcion" class="form-control mt-2"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary mt-3 ">
                            Guardar tarea
                          </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-7 mt-2">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Nombre</td>
                            <td>Descripcion</td>
                            <td>Operaciones</td>
                        </tr>
                    </thead>
                    <ul id="lista"></ul>
                    <tbody id="tareas">
                        
                    </tbody>
                </table>
                
            </div>
        </div>

    </div>

    <script src="js/jquery-3.6.0.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"> </script>
    <script src="app.js"> </script>
    <script src="app2.js"> </script>
     <script>
       
     </script>
</body>

</html>