<?php
include 'conexion.php';
date_default_timezone_set('America/Mazatlan');
$fecha_actual= date("Y-m-d");
 $conversion = strtotime($fecha_actual);
 $fechasalida = date('y-m-d',$conversion);

if(isset($_POST['id'])){
$id = $_POST['id'];

$validar="SELECT ASI_FECHA FROM asistencia WHERE ASI_FECHA='$fecha_actual' AND ASI_ID_BECARIO='$id'";
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){
}
else
{
$sql = "INSERT INTO ASISTENCIA (ASI_ASISTENCIA, ASI_FECHA,ASI_ID_BECARIO)
VALUES ('1' , '$fecha_actual', '$id')";
$conn->close();
}
}
?>
