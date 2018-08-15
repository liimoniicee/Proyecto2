<?php
//conexion con la base de datos
include'conexion.php';
//obtencion de datos para la ejecucion de una insercion en la base de datos
$var_team_name = $_POST['team_nombre'];
$var_integrantes = $_POST['integrantes'];
$var_tipo = $_POST['tipo'];
//linea donde se realiza la insercion en la base de datos
$sql = "INSERT INTO equipos (EQU_NOMBRE_EQUIPO,EQU_NUM_INTEGRA,EQU_TIPO_EQUIPO) VALUES('$var_team_name','$var_integrantes','$var_tipo')";

if ($conn->query($sql) === TRUE) {
  //si la consulta devuelve TRUE, se manda un mensaje de exito y se redirecciona
    echo '<script language="javascript">
        window.location.href="/../proyecto2/teams.php";
        alert("REGISTRO EXITOSO");
        </script>';

} else {
  //si la consulta devuelve algo que no sea TRUE, muestra el error por el cual no devuelve TRUE
    echo "Error, el servidor esta experimentando problemas";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Error: " . $sql . "<br>" . $conn->error;
//    echo '<script language="javascript">
//    window.location.href="/../schoolar/crearequipos.php";
//    alert("ERROR AL REGISTRAR");
//          </script>';
}
//cerrar la conexion
$conn->close();
?>
