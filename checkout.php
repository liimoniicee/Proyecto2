
<head>
  <!-- Bootstrap core CSS     -->
  <link href= "assets/css/bootstrap.min.css" rel="stylesheet" />

  <!--  Paper Dashboard core CSS    -->
  <link href= "assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href= "assets/css/demo.css" rel="stylesheet" />

</head>

<!-- Sweet Alert 2 plugin -->
<script src= "assets/js/sweetalert2.js"></script>




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
      ?>
       <body>
       <script>
       swal({
      title: "Éxito!",
      text: "Has checado salida exitosamente",
      type: "success"
      }).then(function() {
      // Redirect the user
      window.location.href = "destroy.php";
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
     window.location.href = "destroy.php";
     console.log('The Ok Button was clicked.');
     });
           </script>
    </body>
       <?php
    }
    $conn->close();
    ?>
