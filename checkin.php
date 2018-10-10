
<head>
  <!-- Bootstrap core CSS     -->
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

 <!--  Paper Dashboard core CSS    -->
 <link href="assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


 <!--  CSS for Demo Purpose, don't include it in your project     -->
 <link href="assets/css/demo.css" rel="stylesheet" />

 </head>

<!-- Sweet Alert 2 plugin -->
<script src= "assets/js/sweetalert2.js"></script>


<?php
include'conexion.php';
session_start();
date_default_timezone_set('America/Mazatlan');
$diahoy = date("Y-m-d");
$horahoy = date("H:i:sa");

//obtenemos la clave del usuario que desea registrar su entrada
$id_usuario = $_SESSION["clave"];

/*$consu = "select e.ID_EMPLEADO, c.CONT_HOY from empleados e, control_empleados c, usuarios u
where id_usuario = $id_usuario
and c.con_id_empleado = u.id_usuario
and e.EMP_ID_USUARIO = u.ID_USUARIO
and c.CONT_FECHA = '$diahoy'";

$resu = $conn->query($consu);
if($resu->num_rows > 0){
  ?>
   <body>
   <script>
   swal({
 title: "Error!",
 text: "ya has checado entrada el día de hoy!",
 type: "error"
 }).then(function() {
 // Redirect the user
 window.location.href = "admin.php";
 console.log('The Ok Button was clicked.');
 });
       </script>
</body>
   <?php


}else{*/


//hacemos un registro en la base de datos rellenando los campos con la hora actual, la fecha actual y la clave del usuario al que se
//asignan estos datos
$sql = "INSERT INTO control_empleados (CONT_CLAVE_AREA, CONT_FECHA, CONT_HORA_SALIDA, CONT_HORA_ENTRADA, CON_ID_EMPLEADO) VALUES('1',CURDATE(), 'NUL0', CURTIME(), '$id_usuario' )";
//si la consulta devuelve un estado verdadero entonces hace lo siguiente
    if ($conn->query($sql) === TRUE) {
      ?>
       <body>
       <script>
       swal({
      title: "Éxito!",
      text: "Has checado entrada exitosamente",
      type: "success"
      }).then(function() {
      // Redirect the user
      window.location.href = "admin.php";
      console.log('The Ok Button was clicked.');
      });
           </script>
      </body>
       <?php
    } else {
      //en caso contrario, el programa regresa un error con la informacion relacionada al respecto
      ?>
       <body>
       <script>
       swal({
     title: "Error!",
     text: "Algo esta mal",
     type: "error"
     }).then(function() {
     // Redirect the user
     window.location.href = "admin.php";
     console.log('The Ok Button was clicked.');
     });
           </script>
    </body>
       <?php
    }
  //}
    $conn->close();
    ?>
