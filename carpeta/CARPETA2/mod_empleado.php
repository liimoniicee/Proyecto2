
<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();


$response = array();
if(isset($_POST['id'])){
  $id_m = $_POST['id'];


  $consulta = "SELECT * FROM usuarios WHERE ID_USUARIO = $id_m";


   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "id"      => $id_m,
    "nom"     =>  $row["USU_USUARIO"],
    "mat"     =>  $row["USU_CONTRA"],
    "vende"   => $row["USU_ROLL"],
    "canti"   =>  $row["USU_APELLIDO_PATERNO"],
     "apellido_m"  =>  $row["USU_APELLIDO_MATERNO"],
    "nombre1" =>  $row["USU_NOMBRE"],
    "direcc"  => $row["USU_DIRECCION"],
    "col"     =>  $row["USU_COLONIA"],
     "cp"     =>  $row["USU_CODIGO_POSTAL"],
    "img"     => $row["USU_IMG_PERFIL"],
    "tel"     =>  $row["USU_TELEFONO"],
     "cel"    =>  $row["USU_CELULAR"],
    "lug_nac" =>  $row["USU_LUGAR_NACIMIENTO"],
    "fech"    => $row["USU_FECHA_NAC"],
    "sex"     =>  $row["USU_SEXO"]
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
