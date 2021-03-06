<?php
session_start();
include 'fuctions.php';
include 'conexion.php';
verificar_sesion();

$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];
$usu = "";
$apep = "";
$apem = "";
$sex = "";
$dire = "";
$col = "";
$cp = "";
$img = "";
$fech = "";
$lug = "";
$cel = "";
$tel = "";
$team = "";

//consulta para obtener el nombre del equipo por id
$consu = "SELECT
e.EQU_NOMBRE_EQUIPO
FROM
equipos e, usuarios u
WHERE
u.EQU_ID_BECARIO = e.ID_EQUIPOS;";

$res = $conn->query($consu);
if($res->num_rows > 0){
while($row = $res->fetch_assoc()){
	$team = $row["EQU_NOMBRE_EQUIPO"];
}
}

//consulta para rellenar los campos del equipo

$consu_team = "SELECT U.USU_NOMBRE
FROM
usuarios U, equipos E, becario B
WHERE
E.EQU_NOMBRE_EQUIPO = '$team'
AND
B.BEC_ID_USUARIO = U.ID_USUARIO;";

$res_team = $conn->query($consu_team);

//Consulta para rellenar los campos del usuario
$query = "SELECT USU_APELLIDO_PATERNO, USU_APELLIDO_MATERNO, USU_USUARIO,
									USU_SEXO, USU_DIRECCION, USU_COLONIA, USU_CODIGO_POSTAL,
									USU_IMG_PERFIL,USU_TELEFONO, USU_CELULAR, USU_FECHA_NAC,
									USU_LUGAR_NACIMIENTO
									 FROM usuarios where ID_USUARIO = $var_clave";

$resultado = $conn->query($query);


if($resultado->num_rows > 0){

 while($row = $resultado->fetch_assoc()) {
 $usu = $row["USU_USUARIO"];
 $apep = $row["USU_APELLIDO_PATERNO"];
	$apem = $row["USU_APELLIDO_MATERNO"];
	$sex = $row["USU_SEXO"];
	$dire = $row["USU_DIRECCION"];
	$col = $row["USU_COLONIA"];
	$cp = $row["USU_CODIGO_POSTAL"];
	$img = $row["USU_IMG_PERFIL"];
	$tel = $row["USU_TELEFONO"];
	$cel = $row["USU_CELULAR"];
	$fech = $row["USU_FECHA_NAC"];
	$lug = $row["USU_LUGAR_NACIMIENTO"];



}//aqui termina el while

}else{ header("location:index.html");}


 ?>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href= "assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href= "assets/img/favicon.png">
	<link rel="shortcut icon" href="assets/img/favicon.ico">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Schoolar usuario</title>


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href= "assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href= "assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href= "assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href= "assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
    <!--
    Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
    Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        PS
      </a>

      <a class="simple-text logo-normal">Schoolar</a>
    </div>
      <div class="sidebar-wrapper">
      <div class="user">
                <div class="photo">
                    <img src= "<?php echo $img ?>" />
                </div>
                <div class="info">
          <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>
              <?php echo $var_name ?>
                          <b class="caret"></b>
            </span>
                    </a>
                  <!--   <div class="clearfix"></div>

         <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                <a href="#profile">
                  <span class="sidebar-mini">Mp</span>
                  <span class="sidebar-normal">My Profile</span>
                </a>
              </li>
                            <li>
                <a href="#edit">
                  <span class="sidebar-mini">Ep</span>
                  <span class="sidebar-normal">Edit Profile</span>
                </a>
              </li>
                            <li>
                <a href="#settings">
                  <span class="sidebar-mini">S</span>
                  <span class="sidebar-normal">Settings</span>
                </a>
              </li>
                        </ul>
                    </div> -->
                </div>
            </div>
						<ul class="nav">

                <li class="">
                    <a href="user.php">
                        <i class="ti-user"></i>
                        <p>Perfil de usuario</p>
                    </a>
                </li>
                <li>
                    <a href="actividades.php">
                        <i class="ti-star"></i>
                        <p>Actividades</p>
                    </a>
                </li>

                <!-- Panel desplegable -->
                <li>
                            <a data-toggle="collapse" href="#dashboardOverview">
                                <i class="ti-pencil-alt"></i>
                                <p>Solicitudes
                                      <b class="caret"></b>
                                  </p>
                            </a>
                              <div class="collapse" id="dashboardOverview">
                    <ul class="nav">
                      <li>
                        <a href="solicitud_libros.php">
                          <i class="ti-bookmark-alt"></i>
                          <span class="sidebar-normal">Solicitud de libros</span>
                        </a>
                      </li>
                      <li>
                        <a href="solicitud_fondos.php">
                          <i class="ti-money"></i>
                          <span class="sidebar-normal">Solicitud de fondos</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                        </li>
<li class="active">
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda"></i>
                            <p>
                                Ingles
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">

                               <li class="active">
                                    <a href="calificaciones_beca.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Calificaciones </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="asignar_calificaciones_beca.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>


                <!--<li>
                    <a href="">
                        <i class="ti-comments"></i>
                        <p>Ingles</p>
                    </a>

                </li>-->

            </ul>
      </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
        </div>

				<div class="navbar-header">
						<button type="button" class="navbar-toggle">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar bar1"></span>
								<span class="icon-bar bar2"></span>
								<span class="icon-bar bar3"></span>
						</button>
						<a class="navbar-brand">Usuarios</a>
				</div>
         <div class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    <p> <?php
                               echo "Bienvenido: ".$_SESSION["nombre"];
                                     ?> </p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
																	<i class="ti-help-alt"></i>

																	<p class="hidden-md hidden-lg">
																			Notifications
																			<b class="caret"></b>
																	</p>
															</a>
															<ul class="dropdown-menu">
																	<li><a href="assets/manual/usuario.pdf">Manual de usuario</a></li>

															</ul>
                            </li>
                            <li>
                                <a href="destroy.php" class="btn-rotate">
                                    <i class="ti-share-alt"></i>
                                    <p class="hidden-md hidden-lg">

                                <p>logout</p>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>


				 <div class="content">
				                <div class="container-fluid">
				                    <div class="row">
				                        <div class="col-md-12">
				                            <h4 class="title">Tabla asistencias</h4>
				                            <p class="category"><a href="https://datatables.net/" target="_blank">dataTables.net</a> <a href="https://datatables.net/manual/index" target="_blank">full documentation.</a></p>

				                            <br>

				                            <div class="card">
				                                <div class="card-content">
				                                    <div class="toolbar">
				                                        <!--Here you can write extra buttons/actions for the toolbar-->
				                                    </div>
				                                    <div class="fresh-datatables">
				                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
				                                        <thead>
				                                            <tr>
				                                                <th>Nombre</th>
				                                                <th>Apellido P</th>
				                                                <th>Asistencia</th>

				                                                   <th>Fecha</th>

				                                                <th>Porcentaje A.</th>


				                                            </tr>
				                                        </thead>

				      <tfoot>
				                                            <tr>
				                                                  <th>Nombre</th>
				                                                  <th>Apellido P.</th>
				                                                <th>Asistencia</th>

				                                                   <th>Fecha</th>

				                                                <th>Porcentaje A.</th>

				                                            </tr>
				                                        </tfoot>


				                                        <?php


				            include 'conexion.php';
//cONSULTA PARA OBTENER EL ID DEL BECARIO
                $sql_id_b="SELECT ID_BECARIO FROM becario where BEC_ID_USUARIO='$var_clave'"  ;

                   $ejecutar4 = mysqli_query($conn, $sql_id_b);

                        $i = 0;

                        while($fila=mysqli_fetch_array($ejecutar4)){

                            $var_id_bec  = $fila['ID_BECARIO'];
                          }


//CONSULTA PARA OBTENER LA ASISTENCIA Y NOMBRE INDIVIDUAL DEL BECARIO
									$consulta = "  SELECT USU_NOMBRE, USU_APELLIDO_PATERNO,ID_USUARIO,ID_ASISTENCIA,ASI_ASISTENCIA,ASI_FECHA,ASI_ID_BECARIO,BEC_ID_USUARIO FROM usuarios,asistencia,becario
 WHERE ASI_ID_BECARIO='$var_id_bec' AND BEC_ID_USUARIO='$var_clave' AND ID_USUARIO='$var_clave'";

				            $ejecutar = mysqli_query($conn, $consulta);

				            $i = 0;

				            while($fila=mysqli_fetch_array($ejecutar)){
				              $id_a            =$fila['ID_ASISTENCIA'];
				                $id_c          = $fila['ASI_ID_BECARIO'];
				                $asistencia         = $fila['ASI_ASISTENCIA'];
				                $fecha  = $fila['ASI_FECHA'];
				                $nombre_b        = $fila['USU_NOMBRE'];
				                $apellido_b  = $fila['USU_APELLIDO_PATERNO'];


				                $i++;
				                $consu=  "SELECT SUM(asi_asistencia)*100/30 as total FROM asistencia WHERE asi_id_becario='$var_id_bec'";
				                $ejecutar3 = mysqli_query($conn, $consu);

				                $i = 0;

				                while($fila=mysqli_fetch_array($ejecutar3)){

				                    $porcentaje  = $fila['total'];


				                    $i++;
				      }

				        ?>



				                                     <tbody>
				                                            <tr>

				                                                <!--<td><?php echo $id_c; ?></td>-->
                                                        <td><?php echo $nombre_b; ?></td>
                                                         <td><?php echo $apellido_b; ?></td>
                                                        <td><?php echo $asistencia; ?></td>
                                                        <td><?php echo $fecha; ?></td>
                                                        <td><?php echo $porcentaje; ?>%</td>

				                                            <!--SELECT SUM(asi_asistencia)*100/30 as total FROM asistencia WHERE asi_id_becario=1-->
				                                                <td>




				                                             <!--   no=".$fila['CAL_NIVEL_INGLES']."-->
				                                            </tr>

				   <!--<?php
				 include 'conexion.php';
				        if(isset($_GET['editar'])){
				        include("editar_calificaciones.php");
				        }
				    ?>
				    <?php
				     include 'conexion.php';
				    if(isset($_GET['borrar'])){

				    $borrar_id = $_GET['borrar'];

				    $borrar = "DELETE FROM calificaciones WHERE ID_CALIFICACIONES='$borrar_id'";

				    $ejecutar = mysqli_query($conn,$borrar);

				        if($ejecutar){

				        echo "<script>alert('La calificacón ha sido borrado!')</script>";
				        echo "<script>window.open('calificaciones.php','_self')</script>";
				        }

				    }

				    ?>-->



				    <script>
				          function enviarmod(id){
				            $.ajax({
				                // la URL para la petición
				                url : 'mod_asi.php',
				                // la información a enviar
				                // (también es posible utilizar una cadena de datos)
				                data : {
				                   id : id
				                },
				                // especifica si será una petición POST o GET
				                type : 'POST',
				                // el tipo de información que se espera de respuesta
				                dataType : 'json',
				                // código a ejecutar si la petición es satisfactoria;
				                // la respuesta es pasada como argumento a la función
				                success : function(data) {
				                  $("#swal-input0").val(data.data.id);
				                  $("#swal-input1").val(data.data.asi);
				                  $("#swal-input2").val(data.data.fecha);



				                },

				                // código a ejecutar si la petición falla;
				                // son pasados como argumentos a la función
				                // el objeto de la petición en crudo y código de estatus de la petición
				                error : function(xhr, status) {

				                },

				                // código a ejecutar sin importar si la petición falló o no
				                complete : function(xhr, status) {

				                }
				            });
				          }
				          </script>

				          <script>
				          function borrar(id){
				          swal({
				             title: 'Are you sure?',
				             text: "You won't be able to revert this!",
				             type: 'warning',
				             showCancelButton: true,
				             confirmButtonColor: '#3085d6',
				             cancelButtonColor: '#d33',
				             confirmButtonText: 'Yes, delete it!',
				             showLoaderOnConfirm: true,
				             preConfirm: function() {
				               return new Promise(function(resolve) {

				                 $.ajax({
				                  url: 'borrar_asi.php',
				                  type: 'POST',
				                  data: 'delete='+id,
				                  dataType: 'json'
				               })
				               .done(function(response){
				                  swal('Deleted!', response.message, response.status);
				                location.reload();
				               })
				               .fail(function(){
				                  swal('Oops...', 'Something went wrong with ajax !', 'error');
				               });
				               });
				             },
				             allowOutsideClick: false
				          });
				          }
				          </script>

				          <script type="text/javascript">

				          function alerta(id){


				          swal({
				          title: 'Editar asistencia',
				          html:
				          //type="hidden"  ES PARA PCULTAR UN INPUT

				          '<form action="actual_asi" method="post" name="data">'+
				         '<input type="hidden" name="swal-input0" id="swal-input0" class="form-control border-input">' +
				          '<label  for="exampleInputEmail1">Asistencia</label>' +
				          '<input type="number" name="swal-input1" onkeypress="return validar(event)" id="swal-input1" class="form-control border-input">' +
				          '<label for="exampleInputEmail1">Fecha</label>' +
				          '<input type="date" min="0" name="swal-input2" id="swal-input2" class="form-control border-input">' +



				          '<Button type="submit" class= "btn btn-info btn-fill btn-wd">Actualizar</Button>'+
				          '</form>',
				          showCancelButton: true,
				          confirmButtonColor: '#3085d6',
				          cancelButtonColor: '#d33',
				          confirmButtonText: '</form> Actualizar solicitud',
				          cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
				          showConfirmButton: false,
				          focusConfirm: false,
				          buttonsStyling: false,
				          reverseButtons: true
				          }).then(function (result) {

				          swal(
				          'Actualizado!',
				          'La solicitud ha sido actualizada',
				          'success'
				          )
				          }).catch(swal.noop);

				          };
				          </script>



				                                         <!--   <tr>
				                                                    <td><?php echo $nivel; ?></td>
				                                                <td><?php echo $calificacion; ?></td>
				                                                <td><?php echo $unidad; ?></td>
				                                                <td><?php echo $promedio; ?></td>
				                                                 <td><?php echo $id; ?></td>
				                                                <td>
				                                                    <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
				                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
				                                                    <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
				                                                </td>
				                                            </tr>
				                                             <?php } ?>
				                                            <tr>
				                                                <td>Sin datos</td>

				                                                <td>Sin datos</td>
				                                                <td>Sin datos</td>
				                                                <td>Sin datos</td>
				                                                <td>Sin datos</td>
				                                                <td>


				                                                </td>
				                                            </tr> -->

				                                           </tbody>

				                                        </table>


				                                    </div>


				                                </div>
				                            </div><!--  end card  -->
				                        </div> <!-- end col-md-12 -->
				                    </div> <!-- end row -->

				                </div>
				            </div>









<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a>
                                Program Schoolar
                            </a>
                        </li>
                        <li>
                            <a>
                               Blog
                            </a>
                        </li>
                        <li>
                            <a>
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a>Interface</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>


<script>
function validar(e) {
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
// dejar la línea de patron que se necesite y borrar el resto
patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
//patron = /\d/; // Solo acepta números
//patron = /[\w\s]/; // Acepta números y letras
//patron = /\D/; // No acepta números
//

te = String.fromCharCode(tecla);
return patron.test(te);
}
</script>
<!-- onkeypress="return validar(event)"-->
<script>
function validar2(e) {
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
// dejar la línea de patron que se necesite y borrar el resto
//patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
//patron = /\d/; // Solo acepta números
//patron = /\w/; // Acepta números y letras
patron = /[\w\s]/;// Acepta números y letras y espacio
//patron = /\D/; // No acepta números
//

te = String.fromCharCode(tecla);
return patron.test(te);
}
</script>

  <!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
  <script src= "assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
  <script src= "assets/js/jquery-ui.min.js" type="text/javascript"></script>
  <script src= "assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
  <script src= "assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Forms Validations Plugin -->
  <script src= "assets/js/jquery.validate.min.js"></script>

  <!-- Promise Library for SweetAlert2 working on IE -->
  <script src= "assets/js/es6-promise-auto.min.js"></script>

  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src= "assets/js/moment.min.js"></script>

  <!--  Date Time Picker Plugin is included in this js file -->
  <script src= "assets/js/bootstrap-datetimepicker.js"></script>

  <!--  Select Picker Plugin -->
  <script src= "assets/js/bootstrap-selectpicker.js"></script>

  <!--  Switch and Tags Input Plugins -->
  <script src= "assets/js/bootstrap-switch-tags.js"></script>

  <!-- Circle Percentage-chart -->
  <script src= "assets/js/jquery.easypiechart.min.js"></script>

  <!--  Charts Plugin -->
  <script src= "assets/js/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src= "assets/js/bootstrap-notify.js"></script>

  <!-- Sweet Alert 2 plugin -->
  <script src= "assets/js/sweetalert2.js"></script>

  <!-- Vector Map plugin -->
  <script src= "assets/js/jquery-jvectormap.js"></script>

  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

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
  <script src="assets/js/demo.js"></script>

	<script type="text/javascript">
			$(document).ready(function(){
					demo.initOverviewDashboard();
					demo.initCirclePercentage();

			});
	</script>
	<script type="text/javascript">
			$(document).ready(function() {

					$('#datatables').DataTable({
							"pagingType": "full_numbers",
							"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
							responsive: true,
							language: {
							search: "_INPUT_",
									searchPlaceholder: "Search records",
							}
					});


					var table = $('#datatables').DataTable();
					 // Edit record
					 table.on( 'click', '.edit', function () {
							$tr = $(this).closest('tr');

							var data = table.row($tr).data();
							alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
					 } );

					 // Delete a record
					 table.on( 'click', '.remove', function (e) {
							$tr = $(this).closest('tr');
							table.row($tr).remove().draw();
							e.preventDefault();
					 } );

					//Like record
					table.on( 'click', '.like', function () {
							alert('You clicked on Like button');
					 });

			});
	</script>


</html>
