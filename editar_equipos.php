<?php
//conexion con la base de datos
include'conexion.php';
//obtencion de datos necesarios para una actualizacion en la base de datos al editar un equipo
$var_id_equipo = $_POST['id_equipo'];
$var_team_name = $_POST['new_team_nombre'];
$var_integrantes = $_POST['new_integrantes'];
$var_tipo = $_POST['new_tipo'];
$sql0 = "SELECT COUNT(*) as total
FROM
    usuarios, equipos
WHERE usuarios.EQU_ID_BECARIO = equipos.ID_EQUIPOS AND equipos.ID_EQUIPOS = '$var_id_equipo'";
$resultado = $conn->query($sql0);
$row = $resultado->fetch_assoc();
if((int)$row["total"] > 0)
{
  echo '<script language="javascript">
  alert("Error al editar, el equipo cuenta con integrantes, deje sin integrantes para editar");
  setTimeout(function () { window.location.replace("http://localhost/proyecto2/editarequipos.php");
 }, 1000);
  </script>';

}
else{
  //linea donde se ejecuta la actualizacion de un equipo en la base de datos
  $sql = "UPDATE equipos SET EQU_NOMBRE_EQUIPO = '$var_team_name', EQU_NUM_INTEGRA = '$var_integrantes' , EQU_TIPO_EQUIPO = '$var_tipo' WHERE ID_EQUIPOS = '$var_id_equipo'";

      if ($conn->query($sql) === TRUE) {
        //si la consulta devuelve TRUE, se manda un mensaje de exito y se redirecciona
          echo '<script language="javascript">
          const swal = require "../assets/js/sweetalert2.js";
          swal(
            "Good job!",
            "Exito en la EDICION del equipo!",
            "success"
          );
          setTimeout(function () { location.reload(true); }, 2000);
          </script>';
           header('Location: http://localhost/proyecto2/editarequipos.php');
          exit;

      } else {
        //si la consulta devuelve algo que no sea TRUE, muestra el error por el cual no devuelve TRUE
        echo "Error, el servidor esta experimentando problemas";
        echo "Error: Failed to make a MySQL connection, here is why: \n";
        echo "Error: " . $sql . "<br>" . $conn->error;
      echo '<script language="javascript">
      alert("ERROR AL REGISTRAR");
      </script>';
      header('Location: http://localhost/proyecto2/teams.php');
      exit;
      }
}

    //cerrar la conexion
$conn->close();
    ?>
