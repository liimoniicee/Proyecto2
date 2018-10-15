<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"/>
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.ico"/>
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>GSP Cabo</title>
		<!-- Bootstrap core CSS     -->
 		<link href="assets/css/clock.css" rel="stylesheet" />
     <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
	<!-- CODIGO PHP DE INICIO -->
	<?php
		include_once 'conexion.php';
		session_start();
		//variables
		$var_name=$_SESSION['nombre'];
		$var_clave= $_SESSION['clave'];
		$var_tipo = $_SESSION['tipo'];

		if($var_tipo != 5) {
		 //echo "<script>alert('No tienes acceso a esta página!')</script>";
		   //echo "<script>window.open('index.html','_self')</script>";
		   header("Location: error509.html");
		 }
		$id_usuario = $_SESSION["clave"];
		$sql= "SELECT USU_NOMBRE, USU_APELLIDO_PATERNO, USU_ROLL, USU_IMG_PERFIL from usuarios where ID_USUARIO = '$id_usuario'";
		$resultado = $conn->query($sql);
		if($resultado->num_rows > 0){
			while($row = $resultado->fetch_assoc()){
			$var_nombre = $row["USU_NOMBRE"];
			$var_apellido = $row["USU_APELLIDO_PATERNO"];
			$tipo = $row["USU_ROLL"];
			  $var_foto       =     $row['USU_IMG_PERFIL'];
			$user = $var_nombre. " ".$var_apellido;
			}
		}
	?>
	<div class="wrapper">
	    <div class="sidebar" data-background-color="brown" data-active-color="danger">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="#" class="simple-text logo-mini">
					gsp
				</a>
				<a href="admin.php" class="simple-text logo-normal">
					GSP Cabo
				</a>
			</div>
			<div class="sidebar-wrapper">

					<div class="user">
							<div class="info">
									<div class="photo">
											<img src="<?php echo $var_foto ?>" />
									</div>

									<a data-toggle="collapse" href="#collapseExample" class="collapsed">
											<span>
													<?php echo $_SESSION['nombre'];?>
													<b class="caret"></b>
											</span>
									</a>
									<div class="clearfix"></div>

									<div class="collapse" id="collapseExample">
											<ul class="nav">
													<li>
															<a href="">
																	<span class="sidebar-mini"></span>
																	<span class="sidebar-normal">c</span>
															</a>
													</li>
											</ul>
									</div>
							</div>
					</div>

					<ul class="nav">
							<li >
									<a href="admin.php" aria-expanded="true">
											<i class="ti-panel"></i>
											<p>Asistencia empleados
											</p>
									</a>
							</li>
							<li>
									<a href="perfil_admin.php">
											<i class="ti-user"></i>
											<p>Perfil
											</p>
									</a>
							</li>
							<!--<li>
									<a href="agenda.php">
											<i class="ti-calendar"></i>
											<p>
													Agenda
											</p>
									</a>
							</li>-->
							<li>
							<a data-toggle="collapse" href="#tablesExamples">
									<i class="ti-agenda"></i>
									<p>
											Control de empleados
										 <b class="caret"></b>
									</p>
							</a>
							<div class="collapse" id="tablesExamples">
									<ul class="nav">
											<li>
													<a href="registro_empleados.php">
															<span class="sidebar-mini"></span>
															<span class="sidebar-normal">Agregar empleados</span>
													</a>
											</li>

											 <li>
													<a href="mostrar_empleados.php">
															<span class="sidebar-mini"></span>
															<span class="sidebar-normal">Mostrar empelados </span>
													</a>
											</li>
									</ul>
							</div>


					</li>
							<li class="active">
									<a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
											<i class="ti-book"></i>
											<p>Gestion de Equipos
													<b class="caret"></b>
											</p>
									</a>
									<div class="collapse in" id="dashboardOverview">
											<ul class="nav">
													<li>
															<a href="teams.php">
																	<span class="sidebar-mini">E</span>
																	<span class="sidebar-normal">Equipos</span>
															</a>
													</li>
													<li>
															<a href="asignarequipos.php">
																	<span class="sidebar-mini">A</span>
																	<span class="sidebar-normal">Asignar Equipos</span>
															</a>
													</li>
													<li>
															<a href="crearequipos.php">
																	<span class="sidebar-mini">C</span>
																	<span class="sidebar-normal">Crear Equipos</span>
															</a>
													</li>

												<li class="active">
															<a href="editarequipos.php">
																	<span class="sidebar-mini">E</span>
																	<span class="sidebar-normal">Editar Equipos</span>
															</a>
													</li>

													<li>
															<a href="borrarequipos.php">
																	<span class="sidebar-mini">B</span>
																	<span class="sidebar-normal">Borrar Equipos</span>
															</a>
													</li>
											</ul>
									</div>
							</li>


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
										<a class="navbar-brand" href="#Dashboard">
											 Administrador
										</a>
								</div>
								<div class="collapse navbar-collapse">



										<ul class="nav navbar-nav navbar-right">
												<li>
														<a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
																<i class="ti-panel"></i>
																<p><?php echo "Bienvenido: ".$_SESSION['nombre'];?></p>
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
														<a href="destroy.php" class="btn-rotate" onclick="demo.showSwal('warning-message-and-confirmation')">
															 <i class="ti-share-alt" ></i>
														<p>logout</p>

														<!--onclick="demo.showSwal('warning-message-and-confirmation')"-->
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
									<div class="col-lg-4 col-md-5">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">
													LISTADO DE EQUIPOS
												</h4>
												<p class="category"></p>
											</div>
											<div class="card-content table-responsive table-full-width">
												<table class="table table-striped">
													<thead>
														<th>NOMBRE DEL EQUIPO</th>
														<th>NUMERO DE INTEGRANTES</th>
														<th>TIPO DE EQUIPO</th>
													</thead>
													<tbody>
															<?php

																$sql1= "SELECT *
																FROM equipos WHERE ID_EQUIPOS > 0 ORDER BY equipos.EQU_NOMBRE_EQUIPO ASC";
																$resultado = $conn->query($sql1);
																if($resultado->num_rows > 0){
																	while($row = $resultado->fetch_assoc()){
																		echo "<tr>". "\n";
																		echo "<input name='id_equipo' type='hidden' value=".$row["ID_EQUIPOS"]."> \n";
																		echo "<td>".$row["EQU_NOMBRE_EQUIPO"]."</td> \n";
																		echo "<td>".$row["EQU_NUM_INTEGRA"]."</td> \n";
																		echo "<td>".$row["EQU_TIPO_EQUIPO"]."</td> \n";
																		echo "</tr>"."\n";
																	}
																}
															 ?>

													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class=" col-lg-8 col-md-7">
	                    <div class="card">
	                        <div class="card-header">
	                            <h4 class="card-title">Datos del nuevo grupo</h4>
	                        </div>
	                        <div class="card-content">
	                            <form method="POST" action="editar_equipos.php" class="form-horizontal">

<?php 																		$sql4 = "SELECT * FROM equipos where ID_EQUIPOS > 0 ORDER BY equipos.EQU_NOMBRE_EQUIPO ASC";
																		$result4=mysqli_query($conn,$sql4)or die(mysqli_error($conn));
																		echo "<select name='id_equipo' id='equipo' class='selectpicker' data-style='btn-info btn-fill btn-block' title='Seleccione un equipo' data-size='5'> \n";
																		echo "<option value='#'>Seleccione un equipo</option> \n";
																		while($row4=$result4->fetch_assoc())
																		{
																			echo "<option value=".$row4["ID_EQUIPOS"].">".$row4["EQU_NOMBRE_EQUIPO"]."</option> \n";
																		}
																		echo "</select> \n";
?>

	                                <fieldset>
	                                <div class="form-group">
	                                <label class="col-sm-2 control-label">Nombre</label>
	                                <div class="col-sm-10">
	                                            <input type="text" class="form-control" name="new_team_nombre">
	                                        </div>
	                                    </div>
	                                </fieldset>

	                                <fieldset>
	                                  <div class="form-group">
	                                     <label class="col-sm-2 control-label">Numero de integrantes</label>
	                                     <div class="col-sm-10">
	                   <div class="radio radio-inline">
	                     <input id="checkbox50" type="radio" name="new_integrantes" value="2">
	                     <label for="checkbox50">2</label>
	                   </div>
	                   <div class="radio radio-inline">
	                     <input id="checkbox51" type="radio" name="new_integrantes" value="3">
	                     <label for="checkbox51">3</label>
	                   </div>
	                   <div class="radio radio-inline">
	                     <input id="checkbox52" type="radio" name="new_integrantes" value="4">
	                     <label for="checkbox52">4</label>
	                   </div>
	                   <div class="radio radio-inline">
	                     <input id="checkbox52" type="radio" name="new_integrantes" value="5">
	                     <label for="checkbox52">5</label>
	                   </div>
	                                     </div>
	                                  </div>
	                                </fieldset>

	                                <fieldset>
	                                    <div class="form-group">
	                                        <label class="col-sm-2 control-label">Tipo de Equipo</label>
	                                        <div class="col-sm-10">
	                                          <div class="radio">
	                                            <input type="radio" name="new_tipo" id="radio1" value="Limpieza" checked="">
	                                            <label for="radio1">
	                                              Equipo de Limpieza
	                                            </label>
	                                          </div>

	                                          <div class="radio">
	                                            <input type="radio" name="new_tipo" id="radio2" value="Cocina">
	                                            <label for="radio2">
	                                              Equipo de Cocina
	                                            </label>
	                                          </div>
	                                        </div>
																					<!-- <div class="col-md-6">
			<h4 class="card-title">Seleccion de integrantes</h4>
				<div class="row">
						<div class="col-sm-18">
								<select multiple title="Integrantes" class="selectpicker" data-live-search="true" data-style="btn-info btn-fill btn-block" data-size="5">
									<?php
										// $sql="SELECT usuarios.ID_USUARIO, usuarios.USU_NOMBRE FROM equipos, usuarios
										// 			WHERE
	    							// 			usuarios.EQU_ID_BECARIO = equipos.ID_EQUIPOS
										// 			AND usuarios.EQU_ID_BECARIO = 3";
										// 			$resultado = $conexion->query($sql);
										// if($resultado->num_rows > 0){
										// 	while($row = $resultado->fetch_assoc()){
										// 		echo "<option value=".$row["ID_USUARIO"].">".$row["USU_NOMBRE"]."</option> \n";
										//
										// 	}
										// }
									 ?>
								</select>
						</div>


				</div>
	</div> -->
	                                    </div>
	                                </fieldset>
	            <div class="card-footer text-center">
	                <button type="submit" name="submit" class="btn btn-fill btn-wd ">Editar Equipos</button>
	            </div>
	                            </form>
	                        </div>
	                    </div>  <!-- end card -->
	                </div> <!-- end col-md-12 -->
	        </div>
	        </div>
            <footer class="footer">
                <div class="container-fluid">
                </div>
            </footer>
	    </div>
	</div>
</body>
	<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
	<script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Forms Validations Plugin -->
	<script src="assets/js/jquery.validate.min.js"></script>
	<!-- Promise Library for SweetAlert2 working on IE -->
	<script src="assets/js/es6-promise-auto.min.js"></script>
	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="assets/js/moment.min.js"></script>
	<!--  Date Time Picker Plugin is included in this js file -->
	<script src="assets/js/bootstrap-datetimepicker.js"></script>
	<!--  Select Picker Plugin -->
	<script src="assets/js/bootstrap-selectpicker.js"></script>
	<!--  Switch and Tags Input Plugins -->
	<script src="assets/js/bootstrap-switch-tags.js"></script>
	<!-- Circle Percentage-chart -->
	<script src="assets/js/jquery.easypiechart.min.js"></script>
	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>
	<!-- Sweet Alert 2 plugin -->
	<script src="assets/js/sweetalert2.js"></script>
	<!-- Vector Map plugin -->
	<script src="assets/js/jquery-jvectormap.js"></script>
	<!-- Wizard Plugin    -->
	<script src="assets/js/jquery.bootstrap.wizard.min.js"></script>
	<!--  Bootstrap Table Plugin    -->
	<script src="assets/js/bootstrap-table.js"></script>
	<!--  Plugin for DataTables.net  -->
	<script src="assets/js/jquery.datatables.js"></script>
	<!--  Full Calendar Plugin    -->
	<script src="assets/js/fullcalendar.min.js"></script>
	<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js?v=1.2.1"></script>
    <!--   Sharrre Library    -->
<script src="assets/js/jquery.sharrre.js"></script>
		<!--   Sharrre Library    -->
</html>
