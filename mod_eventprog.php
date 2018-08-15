<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();


$response = array();

if(isset($_POST['id'])){
  $id_m = $_POST['id'];


 $consulta= " SELECT
                   ACT_TITULO_ACTVI, 
                   ACT_TIPO_ACTIVIDAD ,
                   ACT_FECHA_INICIO ,
                   ACT_FECHA_TERMINO ,
                   ACT_LUGAR ,  
                   ACT_DESCRIPCION 
                   FROM 
                   actividades  WHERE ID_ACTIVIDAD= $id_m";



   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (

    "id"                 =>  $id_m,
    "nombre_act"         =>  $row["ACT_TITULO_ACTVI"],
    "act_tipo"           =>  $row["ACT_TIPO_ACTIVIDAD"],
    "act_fecha_inicio"    =>  $row["ACT_FECHA_INICIO"],
    "act_fecha_termino"  =>  $row["ACT_FECHA_TERMINO"],
    "act_lugar"          =>  $row["ACT_LUGAR"],
    "act_descrip"        =>  $row["ACT_DESCRIPCION"],

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
