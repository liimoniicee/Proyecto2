<?PHP


require 'conexion.php';

include 'fuctions.php';

$id = $_POST ['swal-input0'];
$nom= $_POST ['swal-input1'];
$mat= $_POST ['swal-input2'];
$vende= $_POST ['swal-input3'];
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
$conn->close();


?>
