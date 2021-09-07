<?php 
    include("conexionUSU.php");
    $con=conectar();

$id_usu=$_GET['id_usu'];

$sql="SELECT * FROM usuarios WHERE id_usu='$id_usu'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">

                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="updateUSU.php" method="POST">

        <input type="hidden" name="id_usu" value="<?php echo $row['id_usu']  ?>">

<label for="nom_usu">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_usu" id="nom_usu"  value="<?php echo $row['nom_usu']  ?>">
<label for="apel_usu">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="apel_usu" id="apel_usu" value="<?php echo $row['apel_usu']  ?>">
<label for="pass_usu">CONTRASEÑA</label>
    <input type="text" class="form-control mb-3" name="pass_usu" id="pass_usu" value="<?php echo $row['pass_usu']  ?>">
<label for="per_usu">PER_USU</label>    
    <input type="text" class="form-control mb-3" name="per_usu" id="per_usu" value="<?php echo $row['per_usu']  ?>">

<label for="est_usu">EST_USU</label>    
    <input type="text" class="form-control mb-3" name="est_usu" id="est_usu" value="<?php echo $row['est_usu']  ?>">

                               

                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="usuarios.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>