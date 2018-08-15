<?php
//Se realiza conexion a la base de datos
include'conexion.php';
//se verifica si la variable "id_usuario" esta vacia
if(isset($_POST["id_usuario"])){
  //si no esta vacia, crea 2 variables asignando el contenido que se encuentra en la variable $_POST
$id_equipo = $_POST["id_equipo"];
$id_alumno = $_POST["id_usuario"];

$sql0 = "SELECT COUNT(*) as total
FROM
    usuarios, equipos
WHERE usuarios.EQU_ID_BECARIO = equipos.ID_EQUIPOS AND equipos.ID_EQUIPOS = '$id_equipo'";
$resultado = $conn->query($sql0);
$row = $resultado->fetch_assoc();
var_dump((int)$row["total"]);
$sql00 = "SELECT EQU_NUM_INTEGRA
FROM
equipos
WHERE equipos.ID_EQUIPOS = '$id_equipo'";
$resultado1 = $conn->query($sql00);
$row2 = $resultado1->fetch_assoc();
var_dump((int)$row2["EQU_NUM_INTEGRA"]);
if ((int)$row["total"] < (int)$row2["EQU_NUM_INTEGRA"])
{
  //Linea donde se ejecuta un UPDATE en la base de datos, asignando un becario a un equipo
  $sql = "UPDATE usuarios SET EQU_ID_BECARIO = '$id_equipo' WHERE ID_USUARIO = '$id_alumno'";
  /* DO YOUR QUERY HERE AND GET THE OUTPUT YOU WANT */
  if ($conn->query($sql) === TRUE) {
    // echo '<script language="javascript">
    // alert("ASIGNACION EXITOSA");
    // window.location.href="/../interface/asignarequipos.php";
    // </script>';
  } else {
    //Si la consulta no devuelve un valor TRUE, muestra un mensaje de error en el cual se puede ver el motivo
    echo "Error, el servidor esta experimentando problemas";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo '<script language="javascript">
    alert("ERROR AL REGISTRAR");
    //     window.location.href="/../proyecto2/asignarequipos.php";
    </script>';
  }
}
else{
  header('Content-type: application/json');
  $response_array['status'] = 'error';
  echo json_encode($response_array);

}
//Esta seccion es para borrar a un becario de un equipo, en el cual se obtiene el identificador del alumno para agregarlo al grupo "Sin Equipo"

}
elseif(isset($_POST["id_usuario_borrar"])){
  $id_alumno = $_POST["id_usuario_borrar"];
  //Aqui se ejecuta la consulta donde se asigna un usuario al grupo predeterminado "Sin Equipo" con el identificador de grupo 0
  $sql = "UPDATE usuarios SET EQU_ID_BECARIO = '0' WHERE ID_USUARIO = '$id_alumno'";
  /* DO YOUR QUERY HERE AND GET THE OUTPUT YOU WANT */
  if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">
    alert("ASIGNACION EXITOSA");
    //     window.location.href="/../proyecto2/asignarequipos.php";
    </script>';
  } else {
    echo "Error, el servidor esta experimentando problemas";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo '<script language="javascript">
    alert("ERROR AL REGISTRAR");
    //   window.location.href="/../proyecto2/asignarequipos.php";
    </script>';
  }
}
//cerrar la conexion
$conn->close();
 ?>
