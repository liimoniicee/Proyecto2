
<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
?>


<?php

include 'conexion.php';

 $id_usuarios = $_SESSION["clave"];
 $sql = "SELECT USU_APELLIDO_PATERNO,USU_APELLIDO_MATERNO,USU_NOMBRE,USU_DIRECCION,USU_COLONIA,USU_CODIGO_POSTAL,USU_IMG_PERFIL,USU_TELEFONO,USU_CELULAR,USU_LUGAR_NACIMIENTO,USU_FECHA_NAC,USU_SEXO,USU_USUARIO FROM USUARIOS WHERE ID_USUARIO = '$id_usuarios' ";
 $resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
         while ($row= $resultado->fetch_assoc()) {

          $var_nombre     =     $row['USU_NOMBRE'];
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
          $var_apellidom  =     $row['USU_APELLIDO_MATERNO'];
          $var_direccion  =     $row['USU_DIRECCION'];
          $var_colonia    =     $row['USU_COLONIA'];
          $var_lugarnac   =     $row['USU_LUGAR_NACIMIENTO'];
          $var_telefono   =     $row['USU_TELEFONO'];
          $var_celular    =     $row['USU_CELULAR'];
          $var_codigopost =     $row['USU_CODIGO_POSTAL'];
          $var_foto       =     $row['USU_IMG_PERFIL'];
          $var_fechanac   =     $row['USU_FECHA_NAC'];
          $var_sexo       =     $row['USU_SEXO'];
          $var_usu        =     $row['USU_USUARIO'];
        }

    }   else {
echo "¡ No se ha encontrado ningún registro !";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Team Interface</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

<!-- WIZARDDDDD CSS -->
<link href="assets2/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
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
    <div class="wrapper">
        <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
            <div class="logo">
                <a href="aspirante.php" class="simple-text logo-mini">
                    CT
                </a>

                <a href="aspirante.php" class="simple-text logo-normal">
                      SCHOOLAR
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
                    <li  >
                        <a href="admin.php" aria-expanded="true">
                            <i class="ti-panel"></i>
                            <p>Dashboard
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
                  <!--  <li>
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
    								<div class="collapse in" id="tablesExamples" aria-expanded="false">
    										<ul class="nav">
    												<li class="active">
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

                   <!-- <li>
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
                                    <i class="ti-bell"></i>
                                    <span class="notification">5</span>
                                    <p class="hidden-md hidden-lg">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#not1">Notification 1</a></li>
                                    <li><a href="#not2">Notification 2</a></li>
                                    <li><a href="#not3">Notification 3</a></li>
                                    <li><a href="#not4">Notification 4</a></li>
                                    <li><a href="#another">Another notification</a></li>
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















 <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="green" id="wizard">
                <form action="" method="">
                <!--        You can switch ' data-color="green" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                        <div class="wizard-header">
                            <h3>
                               <b>Agregar Usuarios</b><br>
                               <small>This information will let us know more about your place.</small>
                            </h3>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#location" data-toggle="tab">Perfil</a></li>
                               <!-- <li><a href="#type" data-toggle="tab">Informacón</a></li>-->
                                <li><a href="#facilities" data-toggle="tab">Detalles</a></li>
                              <!--  <li><a href="#description" data-toggle="tab">Description</a></li>-->
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="location">
                              <div class="row">
                                  <div class="col-sm-12">
                                    <h4 class="info-text"> Agregar la informacón basica del usuario</h4>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Usuario:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">
                                      </div>
                                  </div>
                                    <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Contraseña:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                      </div>
                                  </div>
                                <!--  <div class="col-sm-5">
                                       <div class="form-group">
                                            <label>Country</label><br>
                                             <select name="country" class="form-control">
                                                <option disabled="" selected="">- country -</option>
                                                <option value="Afghanistan"> Afghanistan </option>
                                                <option value="Albania"> Albania </option>
                                                <option value="Algeria"> Algeria </option>
                                                <option value="American Samoa"> American Samoa </option>
                                                <option value="Andorra"> Andorra </option>
                                                <option value="Angola"> Angola </option>
                                                <option value="Anguilla"> Anguilla </option>
                                                <option value="Antarctica"> Antarctica </option>
                                                <option value="...">...</option>
                                            </select>
                                          </div>
                                  </div>-->
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Roll:</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- persons -</option>
                                            <option>1 Person</option>
                                            <option>2 Persons </option>
                                            <option>3 Persons</option>
                                            <option>4 Persons</option>
                                            <option>5 Persons</option>
                                            <option>6+ Persons</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Apellido P.:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                      </div>
                                  </div>

                                     <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Apellido M.:</label>
                 <input type="text" class="form-control" placeholder="Rent price per day">

                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Nombre:</label>
             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                      </div>
                                  </div>
                              
                              </div>
                            </div>
                          <!--  <div class="tab-pane" id="type">
                                <h4 class="info-text">Informacón adicional </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                                                <input type="radio" name="type" value="House">
                                                <div class="icon">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <h6>House</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                                                <input type="radio" name="type" value="Appartment">
                                                <div class="icon">
                                                    <i class="fa fa-building"></i>
                                                </div>
                                                <h6>Appartment</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> -->
                            <div class="tab-pane" id="facilities">
                                <h4 class="info-text">Informacón adicional del usaurio. </h4>
                                <div class="row">
                                    <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Direccón:</label>
               <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                      </div>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Colonia:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                      </div>
                                     </div>
                                     <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Codigo postal:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                       </div>
                                      </div>
                                      <div class="col-sm-5">
                                       <div class="form-group">
                                          <label>Foto</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                       </div>
                                      </div>


                                     <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Telefono:</label>
                 <input type="text" class="form-control" placeholder="Rent price per day">

                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Celular:</label>
           <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                      </div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Lugar de nac.:</label>
                 <input type="text" class="form-control" placeholder="Rent price per day">

                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Sexo:</label>
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your place located?">

                                      </div>
                                  </div>
                                </div>
                            </div>
                           <!-- <div class="tab-pane" id="description">
                                <div class="row">
                                    <h4 class="info-text"> Drop us a small description. </h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Place description</label>
                                            <textarea class="form-control" placeholder="" rows="9">

                                            </textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                         <div class="form-group">
                                            <label>Example</label>
                                            <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
                                          </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' />

                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div> <!-- row -->
    </div> <!--  big container -->




            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="http://www.facebook.com">
                                   Facebook
                                </a>
                            </li>
                            <li>
                               <a href="http://gspcabo.com/?page_id=16">
                                   Green Schoolarship
                                </a>
                            </li>
                            <li>
                                <a href="http://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Interface</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="fixed-plugin">

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

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
    <script src="assets/js/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

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

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <!-- WIZARDDDD -->
    <script src="assets2/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
    <script src="assets2/js/gsdk-bootstrap-wizard.js"></script>
    <script src="assets2/js/jquery.validate.min.js"></script>


</html>
