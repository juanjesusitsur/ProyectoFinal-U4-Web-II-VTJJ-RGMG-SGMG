<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM Addpeliculas";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Agregar peliculas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/estilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3 rounded" alt="..." style="border: 2px solid #000; background-color: rgb(195, 195, 195);">
                            <h2>Ingrese datos de la película</h2>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="titulo" required>
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="descripcion" required>
                                    <input type="text" class="form-control mb-3" name="horario" placeholder="horario" required>
                                    
                                    <input id="btnEnviar" type="submit" class="btn btn-primary">

                                    
                                </form>
                                <br>
                                <input type="button" class="btn btn-warning" value="Cerrar Sesión" onclick="location.href='../index.html'">

                                <br>
                                <br>

                        </div>
                        <div class="col-md-8">
                            <table class="table" style="border: 3px solid #000;">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>titulo</th>
                                        <th>Descripcion</th>
                                        <th>Horario</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['titulo']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['horario']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>

    </body>
    <script>
       function name(params) {
           
       }
    </script>
</html>