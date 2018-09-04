<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Team Interface</title>
		<!-- Bootstrap core CSS     -->
 		<link href="assets/css/clock.css" rel="stylesheet" />
		<!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


     <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


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

		if($var_tipo > 4) {
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
			$var_foto = $row['USU_IMG_PERFIL'];
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
						<a href="admin.php" class="simple-text logo-mini">
								I
						</a>

						<a href="admin.php" class="simple-text logo-normal">
									Interface
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
                    <li class="active">
                        <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
                            <i class="ti-user"></i>
                            <p>Perfil de Usuario
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="dashboardOverview">
                            <ul class="nav">
                                <li class="active">
                                    <a href="">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Editar Perfil</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

  </li>
                       < <li class="">
                        <a href="admin2.php" aria-expanded="true">
                            <i class="ti-panel"></i>
                            <p>Control de empleados
                            </p>
                        </a>
                    </li>

                        <li>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda"></i>
                            <p>
                                Calificaciones
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">

                               <li>
                                    <a href="calificaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Tabla de Calificaciones </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="asignar_calificaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Agregar Calificaciones</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard"></i>
                            <p>
                                Asistencia
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">

                                <li>
                                    <a href="asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia de Ingles</span>
                                    </a>
                                </li>



                            </ul>
                        </div>
                    </li>
                    <li>


						</li>
                <li>
                    <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="false">
                        <i class="ti-book"></i>
                        <p>Gestion de Equipos
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="dashboardOverview">
                        <ul class="nav">
                            <li class="active">
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

              <!--  <li>
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
											 Ingles
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
	                    <div class="col-lg-offset-3 col-sm-6-offset-3 col-md-6">
	                        <div class="card">
	                            <div class="card-content">
																<div id = "clock-rim">
																  <div id = "clock-base">
																    <div id = "notch-container"></div>
																    <div id = "brand">GSP<br/>Cabo</div>
																    <div id = "hour"></div>
																    <div id = "minute"></div>
																    <div id = "second"></div>
																    <div id = "center"></div>
																  </div>
																</div>
	                            </div>
								<div class="card-footer">
									<hr />
									<div class="stats">
										<span id="fecha"></span>
										<div class="clock">
										<div class="numbers">
										<p class="hours"></p>
										<p class="placeholder"></p>
										</div>
										<div class="colon">
										<p>:</p>
										</div>
										<div class="numbers">
										<p class="minutes"></p>
										<p class="placeholder"></p>
										</div>
										<div class="colon">
										<p>:</p>
										</div>
										<div class="numbers">
										<p class="seconds"></p>
										<p class="placeholder"></p>
										</div>
										<div class="am-pm">
										<div>
										<p class="am">am</p>
										</div>
										<div>
										<p class="pm">pm</p>
										</div>
										</div>
									</div>
								</div>
	                        </div>
	                    </div>
	                </div>
								</div>
                </div>
                                        <?php
																				//hacemos coincidir la hora del servidor de php con la de nuestra region.
                                        date_default_timezone_set('America/Mazatlan');
                                        $diahoy = date("Y-m-d");
                                        $horahoy = date("H:i:sa");
																				//Aqui hacemos una nueva variable la cual tendra un valor mas adelante
                                        $style = "";
																				//esta consulta muestra la informacion relacionada con el control de empleado que cumple
																				//con la siguiente restriccion
                                        $sql0= "SELECT * FROM control_empleados WHERE CON_ID_EMPLEADO = '$id_usuario' AND CONT_FECHA = '$diahoy'";
                                        $resultado = $conn->query($sql0);
                                        if ($resultado->num_rows > 0) {
                                            // code...
                                            while($raw = $resultado->fetch_assoc())
                                            {
																							//Si existe dicho registro dentro de la base de datos, se llena la variable $style con
																							//un metodo para ocultar el contenido si ya se hizo su registro del dia
                                                if($raw["CONT_HOY"] == 1)
                                                {
                                                    $style = "style=display:none";
                                                }
                                            }
                                        }
                                        ?>
                                        <div class="row" <?php echo $style; ?> >
                                            <div class="col-md-12">
                                                <div class="card" >
                                                    <div class="card-header">
                                                        <h4 class="card-title">
                                                            CONTROL DE ENTRADAS Y SALIDAS
                                                        </h4>
                                                        <p class="category"></p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <form class="" action="checkin2.php" method="post">
                                                            <?php
																														//Aqui hacemos una consulta a la base de datos para determinar si existe informacion de entrada sobre el empleado en este dia.
                                                            $sql1= "SELECT CONT_HORA_ENTRADA FROM control_empleados WHERE CON_ID_EMPLEADO = '$id_usuario' AND CONT_FECHA = '$diahoy'";
                                                            $resultado = $conn->query($sql1);
                                                            if($resultado->num_rows > 0){
                                                                while($row = $resultado->fetch_assoc()){
                                                                }
                                                            }
                                                            else {
																															//Si aun no hay un registro sobre la entrada, nos habilita un boton en el cual podremos realizar la entrada, haciendo una llamada
																															//al archivo checkin.php
                                                                echo "<button type='submit' class='btn btn-info btn-fill btn-wd pull-left' name='button'>Hacer CHECK-IN</button>";
                                                            }
                                                            ?>
                                                        </form>
                                                        <form class="" action="checkout2.php" method="post">
                                                            <?php
																														//Aqui hacemos una consulta a la base de datos para determinar si existe informacion de salida sobre el empleado en este dia.
                                                            $sql2= "SELECT CONT_HORA_SALIDA FROM control_empleados WHERE CON_ID_EMPLEADO = '$id_usuario' AND CONT_FECHA = '$diahoy'";
                                                            $resultado2 = $conn->query($sql2);
                                                            if ($resultado2->num_rows >0) {
                                                                while($row3 = $resultado2->fetch_assoc()){
																																	//Si aun no hay un registro sobre la salida, nos habilita un boton en el cual podremos realizar la salida, haciendo una llamada
																																	//al archivo checkout.php
                                                                    echo "<button type='submit' class='btn btn-info btn-fill btn-wd pull-left' name='button'>Hacer CHECK-OUT</button>";
                                                                }
                                                            }
                                                            ?>
                                                        </form>
                                                        <div class="clearfix">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
								<div class="row">
									<div class="col-md-12">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">
													CONTROL DE ENTRADAS Y SALIDAS
												</h4>
												<p class="category"></p>
											</div>
											<div class="card-content table-responsive table-full-width">
												<table class="table table-striped">
													<thead>
														<th>ID EMPLEADO</th>
														<th>NOMBRE EMPLEADO</th>
														<th>HORA ENTRADA</th>
														<th>HORA SALIDA</th>
                                                        <th>FECHA</th>
													</thead>
													<tbody>
															<?php
																$sql= "SELECT empleados.ID_EMPLEADO, usuarios.USU_NOMBRE, control_empleados.CONT_HORA_ENTRADA, control_empleados.CONT_HORA_SALIDA, control_empleados.CONT_FECHA
																FROM usuarios, empleados, control_empleados
																WHERE control_empleados.CON_ID_EMPLEADO = empleados.EMP_ID_USUARIO
																AND usuarios.ID_USUARIO = control_empleados.CON_ID_EMPLEADO
                                                                AND Usuarios.ID_USUARIO = '$id_usuario'";
																$resultado = $conn->query($sql);
																if($resultado->num_rows > 0){
																	while($row = $resultado->fetch_assoc()){
																		echo "<tr>". "\n";
																		echo "<td>".$row["ID_EMPLEADO"]."</td> \n";
																		echo "<td>".$row["USU_NOMBRE"]."</td> \n";
																		echo "<td>".$row["CONT_HORA_ENTRADA"]."</td> \n";
																		echo "<td>".$row["CONT_HORA_SALIDA"]."</td> \n";
                                                                        echo "<td>".$row["CONT_FECHA"]."</td> \n";
																		echo "</tr>"."\n";
																	}
																}
															 ?>

													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
	        </div>
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
		<script src="assets/js/clock.js"></script>
</html>
