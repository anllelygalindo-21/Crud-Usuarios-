<?php

include("conexionUSU.php");
$con=conectar();

if(isset($_GET['id_usu'])) {
  $id_usu = $_GET['id_usu'];
  $query = "DELETE FROM usuarios WHERE id_usu='$id_usu'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: usuarios.php"); 
}

?>