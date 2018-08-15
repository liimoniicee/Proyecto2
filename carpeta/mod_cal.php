<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();


$response = array();
if(isset($_POST['id'])){
  $id_m = $_POST['id'];


  $consulta = "SELECT * FROM calificaciones WHERE ID_CALIFICACIONES = $id_m";


   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "id" => $id_m,
    "nom"  =>  $row["CAL_NIVEL_INGLES"],
    "mat"  =>  $row["CAL_CALIFICACION"],
    "vende" => $row["CAL_UNIDAD"],
    "canti"  =>  $row["CAL_PROMEDIO"]);
   }
   }

  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id_m;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}

echo json_encode($response);

 ?>
