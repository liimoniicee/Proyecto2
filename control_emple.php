<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
 //variables
 $var_name=$_SESSION['nombre'];
 $var_clave= $_SESSION['clave'];
 $var_tipo = $_SESSION['tipo'];

 if($var_tipo != 5) {
  //echo "<script>alert('No tienes acceso a esta página!')</script>";
    //echo "<script>window.open('index.html','_self')</script>";
    header("Location: error509.html");
  }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
     <link rel="icon" type="image/png" sizes="96x96" href="assets/img/gsp.jpg">
     <link rel="shortcut icon" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Coordinador/Control Empleados</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

  <script language="javascript" src="javascript/reloj_actual.js" ></script>

</head>
<body  >

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Schoolar
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="coordinador.php">
                        <i class="ti-user"></i>
                        <p>Perfil de Usuario</p>
                    </a>
                </li>

                <li class="active">
                    <a href="control_emple.php">
                        <i class="ti-id-badge"></i>
                        <p>Control empleados</p>
                    </a>
                </li>
                <li>
                    <a href="agenda.php">
                        <i class="ti-agenda"></i>
                        <p>Agenda</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Reportes</p>
                    </a>
                </li>
                  <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Equipos</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Coordinador</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class=""></i>
                                <p><?php echo"Bienvenido a Schoolar:@".$_SESSION['nombre'];?> </p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a  class="dropdown-toggle" data-toggle="dropdown">
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
                            <a href="destroy.php">
                                <i class="ti-share-alt"></i>
                                <p>Logout</p>
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
                            <div class="header">
                                <h4 class="title">Control de Empleados</h4>
                                <p class="category"></p>
                            </div>





<div class="content table-responsive table-full-width">


<!-- CODIGO DE FORMULARIO-->
<!--<div class="col-md-10"> -->
<div class="">
    <div class="form-group">
        <label>Numero de empleado:</label>
            <input type="text" name="num_empleado" required="">
                </div>
    <div class="form-group">
        <label> Clave Area</label>
            <input type="text" name="clave_area" required="">
                 </div>
   <div class="text-center">
        <button type="submit" class="btn btn-info btn-fill btn-wd">Entrada</button>
            <button type="submit" class="btn btn-info btn-fill btn-wd">Salida</button>
            </div>
</div>

<div class="">
    <div class="form-group">
        <label>Hora Actual:</label>
                </div>
</div>

<div class="">
    <div class="form-group">
        <label>   Entrada a las:  </label>
    </div>
</div>



<!--<input type="file" name="curriculum" />-->



                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
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
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">GSPCABO.COM</a>
                </div>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

</html>
