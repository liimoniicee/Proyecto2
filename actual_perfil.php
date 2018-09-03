
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




<?PHP
require 'conexion.php';
session_start();
include 'fuctions.php';
verificar_sesion();
$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];

$usuario= $_POST ['user'];
$nom= $_POST ['nom'];
$apep= $_POST ['apep'];
$apem= $_POST ['apem'];
$cp= $_POST ['cp'];
$dire= $_POST ['dire'];
$cel= $_POST ['cel'];
$tel= $_POST ['tel'];
$col= $_POST ['col'];
$fech= $_POST ['fech'];
$lug= $_POST ['lug'];
$sex= $_POST ['sex'];

$sql = "UPDATE
usuarios
SET
USU_USUARIO ='$usuario', USU_NOMBRE='$nom', USU_SEXO='$sex', USU_CELULAR='$cel',
USU_COLONIA ='$col', USU_TELEFONO = '$tel', USU_DIRECCION ='$dire', USU_FECHA_NAC ='$fech',
USU_LUGAR_NACIMIENTO ='$lug', USU_CODIGO_POSTAL ='$cp', USU_APELLIDO_PATERNO ='$apep',
USU_APELLIDO_MATERNO ='$apem'
WHERE
ID_USUARIO= $var_clave;";

$res = $conn->query($sql);

if (!$res) {
  ?>
   <body>
   <script>
   swal({
 title: "Error!",
 text: "Algo esta mal",
 type: "error"
 }).then(function() {
 // Redirect the user
 window.location.href = "user.php";
 console.log('The Ok Button was clicked.');
 });
       </script>
</body>
   <?php
}
?>
 <body>
 <script>
 swal({
title: "Success",
text: "Actualizacion correcta",
type: "success"
}).then(function() {
// Redirect the user
window.location.href = "user.php";
console.log('The Ok Button was clicked.');
});
     </script>
</body>
 <?php
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
