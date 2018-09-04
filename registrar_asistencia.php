
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
     session_start();
     include 'fuctions.php';
   verificar_sesion();
?>

<?php
include 'conexion.php';


$var_asistencia = $_POST['asistencia'];

$fecha_actual= $_POST['fecha'];      //date("d/m/Y");  // ("d/m/Y")
 $conversion = strtotime($fecha_actual);
 $fechasalida = date('y-m-d',$conversion);

$id= $_POST['idbec'];







$validar="SELECT ASI_FECHA FROM asistencia WHERE ASI_FECHA='$fecha_actual' AND ASI_ID_BECARIO='$id'";
//if(mysqli_num_rows($nuevo_usuario)>0)
$resultado = $conn->query($validar);
if ($resultado->num_rows > 0){
  ?>
   <body>
   <script>
   swal({
 title: "Error!",
 text: "Ya has registrado la asistencia de este día!",
 type: "error"
 }).then(function() {
 // Redirect the user
 window.location.href = "asistencia.php";
 console.log('The Ok Button was clicked.');
 });
       </script>
</body>
   <?php
}

else
{

$sql = "INSERT INTO ASISTENCIA (ASI_ASISTENCIA, ASI_FECHA,ASI_ID_BECARIO)
VALUES ('$var_asistencia' , '$fecha_actual', '$id')";



if ($conn->query($sql) === TRUE) {
  ?>
   <body>
   <script>
   swal({
  title: "Success",
  text: "Asistencia tomada correctamente!",
  type: "success"
  }).then(function() {
  // Redirect the user
  window.location.href = "asistencia.php";
  console.log('The Ok Button was clicked.');
  });
       </script>
  </body>
   <?php
} else {
     // echo "<script>alert('No se pudo guardar correctamente, intentelo de nuevo!')</script>";
       // echo "<script>window.open('asistencia.php','_self')</script>";
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

}
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
