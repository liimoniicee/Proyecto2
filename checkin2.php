
<head>
  <!-- Bootstrap core CSS     -->
  <link href= "assets/css/bootstrap.min.css" rel="stylesheet" />

  <!--  Paper Dashboard core CSS    -->
  <link href= "assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href= "assets/css/demo.css" rel="stylesheet" />

</head>

<script src= "assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src= "assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src= "assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src= "assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src= "assets/js/paper-dashboard.js?v=1.2.1"></script>

  <!--   Sharrre Library    -->
  <script src= "assets/js/jquery.sharrre.js"></script>

<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src= "assets/js/es6-promise-auto.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src= "assets/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src= "assets/js/bootstrap-datetimepicker.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src= "assets/js/sweetalert2.js"></script>



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

//Hace un redireccionamiento a la pagina principal una vez completado el registro de entrada.
?>
 <body>
 <script>
 swal({
title: "Éxito!",
text: "Has checado entrada exitosamente",
type: "success"
}).then(function() {
// Redirect the user
window.location.href = "admin2.php";
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
     window.location.href = "admin2.php";
     console.log('The Ok Button was clicked.');
     });
           </script>
    </body>
       <?php
    }
    $conn->close();
    ?>



    <script src= "assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src= "assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src= "assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src= "assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Forms Validations Plugin -->
    <script src= "assets/js/jquery.validate.min.js"></script>



    <!-- Vector Map plugin -->
    <script src= "assets/js/jquery-jvectormap.js"></script>



    <!-- Wizard Plugin    -->
    <script src= "assets/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src= "assets/js/bootstrap-table.js"></script>

    <!--  Plugin for DataTables.net  -->
    <script src= "assets/js/jquery.datatables.js"></script>

    <!--  Full Calendar Plugin    -->
    <script src= "assets/js/fullcalendar.min.js"></script>

    <!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
    <script src= "assets/js/paper-dashboard.js?v=1.2.1"></script>

      <!--   Sharrre Library    -->
      <script src= "assets/js/jquery.sharrre.js"></script>

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="../assets/js/demo.js"></script>
