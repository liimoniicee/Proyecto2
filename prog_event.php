<?php

require_once"conexion.php";

$var_titulo        = $_POST['titulo'];
$var_tipoevent     = $_POST['tipo_event'];
$var_fechaini      = $_POST['fecha_ini'];
$var_fechafin      = $_POST['fecha_fin'];
$var_lugar         = $_POST['lugar'];
$var_descripcion   = $_POST['descrip'];


$conversion1 = strtotime($var_fechaini);
$fechasalida1 = date('y-m-d',$conversion1);

$conversion2 = strtotime($var_fechafin);
$fechasalida2 = date('y-m-d',$conversion2);


$sql = "INSERT INTO actividades (ACT_TITULO_ACTVI,ACT_TIPO_ACTIVIDAD,ACT_FECHA_INICIO,ACT_FECHA_TERMINO,ACT_LUGAR,ACT_DESCRIPCION,ACT_ID_BECARIO) VALUES 
('$var_titulo','$var_tipoevent ','$fechasalida1','$fechasalida2','$var_lugar','$var_descripcion','4' )";

		if($conn->query($sql) === TRUE){
			header( "location:coordinador.php");
		}
		else {
			echo ("Error: ". mysqli_error($conn));
		}
		$conn->close();

?>
