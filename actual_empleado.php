<?PHP


require 'conexion.php';

include 'fuctions.php';

$id = $_POST ['swal-input0'];
$nom= $_POST ['swal-input1'];
$mat= $_POST ['swal-input2'];
$vende= $_POST ['swal-input3']; // este es el de roll
$canti= $_POST ['swal-input4'];

$apellido_m = $_POST ['swal-input5'];
$nombre1= $_POST ['swal-input6'];
$direcc= $_POST ['swal-input7'];
$col= $_POST ['swal-input8'];
$cp= $_POST ['swal-input9'];

$img = $_POST ['swal-input10'];
$tel= $_POST ['swal-input11'];
$cel= $_POST ['swal-input12'];
$lug_nac= $_POST ['swal-input13'];
$fech= $_POST ['swal-input14'];
$sex= $_POST ['swal-input15'];

$conversion = strtotime($fech);
$fechasalida = date('y-m-d',$conversion);
//consulta para obtener el id del becario
$sql = "UPDATE
usuarios
SET
USU_USUARIO = '$nom',
USU_CONTRA = '$mat',
USU_ROLL = '$vende',
USU_APELLIDO_PATERNO = '$canti',
USU_APELLIDO_MATERNO = '$apellido_m',
USU_NOMBRE = '$nombre1',
USU_DIRECCION = '$direcc',
USU_COLONIA = '$col',
USU_CODIGO_POSTAL = '$cp',
USU_IMG_PERFIL = '$img',
USU_TELEFONO = '$tel',
USU_CELULAR = '$cel',
USU_LUGAR_NACIMIENTO = '$lug_nac',
USU_FECHA_NAC = '$fechasalida',
USU_SEXO = '$sex'
WHERE
ID_USUARIO = '$id';";

//$nuevo_becario="INSERT INTO becario(BEC_STATUS,BEC_ID_USUARIO) VALUES ('$var_usuario' , '$var_contraseña')";//  aqui esta esto de ingresar becario

switch($vende)
    {
    case ($vende == 3):
    $nuevo_becario="INSERT INTO becario(BEC_STATUS,BEC_ID_USUARIO) VALUES ('activo' , '$id')";
    break;
 
    //case (($vende== 3) && ($var_promedio2 <= 95)):
   //$sql11 ="UPDATE aspirantes SET ASP_PRESELECCION='Medio' WHERE ASP_ID_USUARIO='$var_id_foranea6' ";
    //break;
 
   // case (($vende ==3) && ($var_promedio2 = 100)):
  //$sql12 ="UPDATE aspirantes SET ASP_PRESELECCION='Alto' WHERE ASP_ID_USUARIO='$var_id_foranea6' ";
    //break;
    }





if ($conn->query($sql) === TRUE) {
    //echo "El registro ha sido agregado correctamente";
    //echo'<script type="text/javascript">
    //alert("Felicidades Te has registrado con exito!");
    //window.location.href="registro.html";
    //</script>';
	header("Location: mostrar_empleados.php");

    


} else {
     
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 if ($conn->query($nuevo_becario) === TRUE) {
 echo " $nuevo_becario= El registro ha sido agregado correctamente";echo "<br>";

}  else {
     
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
