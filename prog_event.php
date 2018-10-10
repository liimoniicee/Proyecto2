
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

$var_titulo        = $_POST['titulo'];
$var_tipoevent     = $_POST['tipo_event'];
$var_fechaini      = $_POST['fecha_ini'];
$var_fechafin      = $_POST['fecha_fin'];
$var_lugar         = $_POST['lugar'];
$var_descripcion   = $_POST['descrip'];


$conversion1 = strtotime($var_fechaini);
$fechasalida1 = date('y-m-d',$conversion1);

$conversion2 = strtotime($var_fechafin);
$fechasalida2 = date('y-m-d',$conversion2);


$sql = "INSERT INTO actividades (ACT_TITULO_ACTVI,ACT_TIPO_ACTIVIDAD,ACT_FECHA_INICIO,ACT_FECHA_TERMINO,ACT_LUGAR,ACT_DESCRIPCION,ACT_ID_BECARIO) VALUES
('$var_titulo','$var_tipoevent ','$fechasalida1','$fechasalida2','$var_lugar','$var_descripcion','4' )";

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
			      window.location.href = "eventos_prog.php";
			      console.log('The Ok Button was clicked.');
			      });
			           </script>
			      </body>
			       <?php
		}
		else {
			?>
			 <body>
			 <script>
			 swal({
		 title: "Error!",
		 text: "Algo esta mal",
		 type: "error"
		 }).then(function() {
		 // Redirect the user
		 window.location.href = "agenda_progevent.php";
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
