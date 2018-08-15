<?php
include'conexion.php';
session_start();
//obtenemos la clave del usuario que desea registrar su entrada
$id_usuario = $_SESSION["clave"];
//hacemos un registro en la base de datos rellenando los campos con la hora actual, la fecha actual y la clave del usuario al que se
//asignan estos datos
$sql = "INSERT INTO control_empleados (CONT_CLAVE_AREA, CONT_FECHA, CONT_HORA_SALIDA, CONT_HORA_ENTRADA, CON_ID_EMPLEADO) VALUES('1',CURDATE(), 'NUL0', CURTIME(), '$id_usuario' )";
//si la consulta devuelve un estado verdadero entonces hace lo siguiente
    if ($conn->query($sql) === TRUE) {
        echo "<script src='assets/js/sweetalert2.js'></script>";
        echo '<script language="javascript">
//Hace un redireccionamiento a la pagina principal una vez completado el registro de entrada.
window.location.href="/../proyecto2/admin2.php";
alert("REGISTRO EXITOSO");
</script>';
    } else {
      //en caso contrario, el programa regresa un error con la informacion relacionada al respecto
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
