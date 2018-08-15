<?php

require_once"conexion.php";

$id                = $_POST['swal-input0'];
$var_titulo        = $_POST['swal-input1'];
$var_tipoevent     = $_POST['swal-input2'];
$var_fechaini      = $_POST['swal-input3'];
$var_fechafin      = $_POST['swal-input4'];
$var_lugar         = $_POST['swal-input5'];
$var_descripcion   = $_POST['swal-input6'];


$conversion1 = strtotime($var_fechaini);
$fechasalida1 = date('y-m-d',$conversion1);

$conversion2 = strtotime($var_fechafin);
$fechasalida2 = date('y-m-d',$conversion2);


$sql = " UPDATE actividades 

SET

ACT_TITULO_ACTVI   = '$var_titulo',

ACT_TIPO_ACTIVIDAD = '$var_tipoevent',

ACT_FECHA_INICIO   = '$fechasalida1',

ACT_FECHA_TERMINO  = '$fechasalida2',

ACT_LUGAR          = '$var_lugar',

ACT_DESCRIPCION    = '$var_descripcion'

WHERE

ID_ACTIVIDAD       = '$id'; ";


		if($conn->query($sql) === TRUE){
			header( "location:eventos_prog.php");
		}
		else {
			echo ("Error: ". mysqli_error($conn));
		}
		$conn->close();

?>
