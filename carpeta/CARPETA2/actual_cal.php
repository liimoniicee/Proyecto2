<?PHP


require 'conexion.php';

include 'fuctions.php';
$id = $_POST ['swal-input0'];
$nom_maes= $_POST ['swal-input1'];
$mat= $_POST ['swal-input2'];
$vend= $_POST ['swal-input3'];
$cant= $_POST ['swal-input4'];


//consulta para obtener el id del becario
$query = "UPDATE
calificaciones
SET
CAL_NIVEL_INGLES = '$nom_maes',
CAL_CALIFICACION = '$mat',
CAL_UNIDAD = '$vend',
CAL_PROMEDIO = '$cant'


WHERE
ID_CALIFICACIONES = '$id';";

$res = $conn->query($query);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{header("Location: calificaciones.php");}
?>
