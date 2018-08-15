
<?php
//realizamos nuestra conexion con la base de datos para realizar modificaciones
include'conexion.php';
session_start();
//obtenemos la clave del usuario que desea registrar su entrada
$id_usuario = $_SESSION["clave"];
//hacemos un registro en la base de datos rellenando los campos con la hora actual, la fecha actual y la clave del usuario al que se
//asignan estos datos
$sql = "UPDATE control_empleados SET CONT_HORA_SALIDA = CURTIME(), CONT_HOY = '1' WHERE CON_ID_EMPLEADO =  '$id_usuario'";

    if ($conn->query($sql) === TRUE) {
      //si la consulta devuelve un estado verdadero entonces hace lo siguiente
        echo '<script language="javascript">
window.location.href="/../proyecto2/admin2.php";
//Hace un redireccionamiento a la pagina principal una vez completado el registro de entrada.

alert("REGISTRO EXITOSO");
</script>';

    } else {
      //en caso contrario, el programa regresa un error con la informacion relacionada al respecto
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
