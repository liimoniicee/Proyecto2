<?php
session_start();
include 'fuctions.php';
include 'conexion.php';

verificar_sesion();


$response = array();

if(isset($_POST['id'])){

  $id_m =$_POST['id'];

 $consulta = " SELECT  USU_NOMBRE, USU_APELLIDO_MATERNO, USU_APELLIDO_PATERNO FROM usuarios WHERE ID_USUARIO = $id_m";

   $resultado = $conn->query($consulta);

   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
      
  $response['data'] = array (
    "id" => $id_m,
    "name"  =>  $row["USU_NOMBRE"],
    "apepat"  =>  $row["USU_APELLIDO_PATERNO"],
    "apemat" => $row["USU_APELLIDO_MATERNO"],
  );
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
