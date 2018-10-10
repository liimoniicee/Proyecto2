
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
<link rel="shortcut icon" href="assets/img/favicon.ico">

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

require_once"conexion.php";

session_start();
$var_id         = $_SESSION['clave'];
$var_nombre     = $_POST['nombre'];
$var_apellidop  = $_POST['ape_pat'];
$var_apellidom  = $_POST['ape_mat'];
$var_direccion  = $_POST['direccion'];
$var_colonia    = $_POST['colonia'];
$var_lugarnac   = $_POST['lug_nac'];
$var_telefono   = $_POST['telefono'];
$var_celular    = $_POST['celular'];
$var_codigopost = $_POST['codigop'];
$var_fechanac   = $_POST['fecha_nac'];
$var_sexo       = $_POST['sexo'];



$conversion = strtotime($var_fechanac);
$fechasalida = date('y-m-d',$conversion);



$sql = " UPDATE USUARIOS SET
                            USU_NOMBRE='$var_nombre',
														USU_APELLIDO_PATERNO='$var_apellidop',
														USU_APELLIDO_MATERNO='$var_apellidom',
														USU_DIRECCION='$var_direccion',
														USU_COLONIA='$var_colonia',
														USU_LUGAR_NACIMIENTO='$var_lugarnac',
														USU_TELEFONO='$var_telefono',
														USU_CELULAR='$var_celular',
														USU_CODIGO_POSTAL='$var_codigopost',
														USU_FECHA_NAC='$fechasalida',
														USU_SEXO='$var_sexo'
														WHERE ID_USUARIO='$var_id' ";
		if($conn->query($sql) === TRUE){

      ?>
       <body>
       <script>
       swal({
      title: "Success",
      text: "Actualizacion correcta",
      type: "success"
      }).then(function() {
      // Redirect the user
      window.location.href = "aspirante.php";
      console.log('The Ok Button was clicked.');
      });
           </script>
      </body>
       <?php
	}else {
    ?>
     <body>
     <script>
     swal({
   title: "Error!",
   text: "Algo esta mal",
   type: "error"
   }).then(function() {
   // Redirect the user
   window.location.href = "aspirante.php";
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
