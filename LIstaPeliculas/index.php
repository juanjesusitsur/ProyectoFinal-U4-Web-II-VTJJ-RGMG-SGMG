<?php 
    include("../AgregarPelis/conexion.php");
    $con=conectar();

    $sql="SELECT * FROM Addpeliculas";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Lista de peliculas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <br/>
    <input type="button" class="btn btn-warning" value="Volver al Inicio" onclick="location.href='../index.html'">
    <br/>
    <br/>


                        <div class="tabla" style="text-align:center">

                            <table  class="table">
                                <thead  class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
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
</html>