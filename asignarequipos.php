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
		include 'conexion.php';
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
		$sql= "SELECT USU_NOMBRE, USU_APELLIDO_PATERNO, USU_ROLL from usuarios where ID_USUARIO = '$id_usuario'";
		$resultado = $conn->query($sql);
		if($resultado->num_rows > 0){
			while($row = $resultado->fetch_assoc()){
			$var_nombre = $row["USU_NOMBRE"];
			$var_apellido = $row["USU_APELLIDO_PATERNO"];
			$tipo = $row["USU_ROLL"];
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
							<li>
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
													<li class="active" >
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

													<li>
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

						<!--	<li>
									<a href="assets/db/logout.php">
											<i class="ti-book"></i>
											<p>Cerrar Sesion</p>
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
									<div class="col-md-12">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">
													LISTADO DE BECARIOS SIN EQUIPO
												</h4>
												<p class="category"></p>
											</div>
											<div class="card-content table-responsive table-full-width">
												<table class="table table-hover">
													<thead class="thead-dark">
														<th>ID</th>
														<th>NOMBRE</th>
														<th>APELLIDO PATERNO</th>
														<th>APELLIDO MATERNO</th>
														<th>ACCIONES</th>
														<th>ACCIONES</th>
													</thead>
													<tbody>
															<?php
																$sql1= "SELECT usuarios.ID_USUARIO, usuarios.USU_NOMBRE, usuarios.USU_APELLIDO_PATERNO, usuarios.USU_APELLIDO_MATERNO, equipos.EQU_NOMBRE_EQUIPO
																FROM USUARIOS, BECARIO, EQUIPOS
																WHERE USUARIOS.ID_USUARIO = BECARIO.BEC_ID_USUARIO
																AND USUARIOS.EQU_ID_BECARIO = 0
																AND USUARIOS.EQU_ID_BECARIO = EQUIPOS.ID_EQUIPOS";
																$resultado = $conn->query($sql1);
																if($resultado->num_rows > 0){
																	while($row = $resultado->fetch_assoc()){

																		echo "<tr>";
																		echo "<td>".$row["ID_USUARIO"]."</td> \n";
																		echo "<td>".$row["USU_NOMBRE"]."</td> \n";
																		echo "<td>".$row["USU_APELLIDO_PATERNO"]."</td> \n";
																		echo "<td>".$row["USU_APELLIDO_MATERNO"]."</td> \n";
																		echo "<td>";
																		$sql4 = "SELECT * FROM equipos where ID_EQUIPOS > 0";
																		$result4=mysqli_query($conn,$sql4)or die(mysqli_error($conn));

																		echo "<form id='form1' > \n";
																		echo "<input name='id_usuario' id='usuarioid' type='hidden' value=".$row["ID_USUARIO"]."> \n";
																		echo "<select name='id_equipo' id='equipo' class='selectpicker' data-style='btn btn-simple btn-danger btn-wd' title='Seleccione un equipo' data-size='5'> \n";
																		echo "<option value='#'>Seleccione un equipo</option> \n";
																		while($row4=$result4->fetch_assoc())
																		{
																			echo "<option value=".$row4["ID_EQUIPOS"].">".$row4["EQU_NOMBRE_EQUIPO"]."</option> \n";
																		}
																		echo "</select> \n";
																		echo "</td> \n";
																		echo "<td> \n";
																		echo "<button type='submit' class='btn btn-simple btn-info btn-wd'>Asignar</button> \n";
																		echo "</td> \n";
																		echo "</td>";
																		echo "</tr>"."\n";
																		echo	"</form> \n";
																	}
																}
															 ?>
													</tbody>
												</table>
												<!-- <div class="card-footer text-center">
														<button type="submit" class="btn btn-info btn-fill">Guardar todos los cambios</button>
													</div> -->
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<?php
										$query = "SELECT equipos.ID_EQUIPOS FROM equipos ORDER BY equipos.ID_EQUIPOS ASC";
										$contador = 0;
										$arraylength = 0;
										$arreglo_ID_EQUIPOS = array();
										$result=mysqli_query($conn,$query)or die(mysqli_error($conn));
										while ($row1 = mysqli_fetch_array($result, MYSQLI_NUM)) {
										 //	printf ("(%s)\n", $row1[0]);
											$arraylength = count($row);
										// 	printf ("(%s)\n",$arraylength);
											$arreglo_ID_EQUIPOS = $row1[0];
										 	// var_dump($row1[0]);
										 	// var_dump((int)$arraylength);
										 	// var_dump((int)$arreglo_ID_EQUIPOS);
											for ($i = 0; $i <= $arraylength; $i++)
											{
												$sql3 = "SELECT * FROM equipos WHERE ID_EQUIPOS = '$row1[0]' AND ID_EQUIPOS > 0";
												$result3=mysqli_query($conn,$sql3)or die(mysqli_error($conn));
												while($row3 = $result3->fetch_assoc()){
													 $id = $row1[0];
													 echo "<div class='col-sm-6 col-lg-3'>";
													 echo "<div class='card'>";
													 echo "<div class='card-header'>";
													 echo "<h4 class='card-title'>".$row3["EQU_NOMBRE_EQUIPO"]."</h4>";
													 echo "<p class='category'>".$row3["EQU_TIPO_EQUIPO"]."</p>";
													 echo "</div>";
													 echo "<div class='card-content table-responsive table-full-width'>";
													 echo "<table class='table table-hover'>";
													 echo "<thead>";
													 echo "<th>Nombre</th>";
													 echo "<th>Apellido</th>";
													 echo "<th>Quitar</th>";
													 echo "</thead>";
													 echo "<tbody>";
												$sql4 = "	SELECT usuarios.ID_USUARIO,usuarios.USU_NOMBRE, usuarios.USU_APELLIDO_PATERNO
																	FROM usuarios, equipos
																	WHERE usuarios.EQU_ID_BECARIO = equipos.ID_EQUIPOS
																	AND equipos.ID_EQUIPOS = '$id'";
													$result4=mysqli_query($conn,$sql4)or die(mysqli_error($conn));
													while($row4 = $result4->fetch_assoc()){
													echo "<tr>". "\n";
													echo "<form id='form2' > \n";
													echo "<input name='id_usuario_borrar' type='hidden' value=".$row4["ID_USUARIO"]."> \n";
													echo "<td>".$row4["USU_NOMBRE"]."</td> \n";
													echo "<td>".$row4["USU_APELLIDO_PATERNO"]."</td> \n";
													echo "<td> \n";
													echo "<button type='submit' class='btn btn-xs btn-danger btn-info'> Borrar </button>\n";
													echo "</td>";
													echo "</tr>"."\n";
												}
													echo "</tbody>";
													echo	"</form> \n";
													echo "</table>";
													echo "</div>";
													echo "</div>";
													echo "</div>";


												}
												// code...
											}
										}
									 ?>
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
<script src="assets/js/ajax/asignarequipos.js"></script>
	<!--   Sharrre Library    -->
	<script src="assets/js/jquery.sharrre.js"></script>
</html>
