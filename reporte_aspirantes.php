<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Comp
    atible" content="IE=edge,chrome=1" />

    <title>Bitacora de Limpieza</title>

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
    <div class="wrapper">

        <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>

                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                 SCHOOLAR
                </a>
            </div>


            <div class="sidebar-wrapper">

                <div class="user">
                    <div class="info">
                        <div class="photo">
                            <img src="assets/img/faces/face-2.jpg" />
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
                                        <span class="sidebar-normal">Configuración de cuenta</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="nav">
                    <li>
                        <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
                            <i class="ti-user"></i>
                            <p>Perfil de Usuario
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="dashboardOverview">
                            <ul class="nav">
                                <li >
                                    <a href="coordinador.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Editar Perfil</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="ti-id-badge"></i>
                            <p>Control Empleados
                               <b class="caret"></b>
                            </p>
                        </a>
                    </li >


                        <li>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda"></i>
                            <p>
                                Agenda
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="agenda_progevent.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Programar un Evento</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="eventos_prog.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Eventos Programados</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="active">
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard"></i>
                            <p>
                                Reportes
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse-in" id="formsExamples">
                            <ul class="nav">

                                <li>
                                    <a href="reporte_bitacora.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Bitacora de Limpieza</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="forms/extended.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia Ingles</span>
                                    </a>
                                </li>
                                 <li class="active">
                                    <a href="reporte_aspirantes.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Aspirantes</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#mapsExamples">
                            <i class="ti-comments-smiley"></i>
                            <p>
                                Equipos
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="../maps/google.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Ver Equipos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../maps/vector.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Nuevo Equipo</span>
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
                           Coordinador
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">



                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p class="text-primary"><?php echo "Bienvenido: ".$_SESSION['nombre'];?></p>
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
                                <a href="destroy.php" class="btn-rotate">
                                    <i class="ti-share-alt"></i>
                                    <p class="hidden-md hidden-lg">
                                        Settings
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
                <div class="col-md-10 col-md-offset-1">
                     <div class="card">
                         <div class="content">
                            <div class=" card content">


<div class="header">
    <br>
 <h4 class="card-title" style=" text-align:center;">Programa de Becas Green A.C</h4>
</br>
 <p  class="category"  style="text-align: center;">GSP Sede Morelos Local 3 y 4. entre Revolución y CarranzaCol. Centro, CP.23450 ,BCS, México. Tel:+52 (624) 105 0985</p>
 <br>
</div>
</br>
<div class="col-md-12 col-md-offset-1">
<p class="text-info" > INFORMACION DEL ESTUDIANTE</p>
</div>
</br>
</br>


                                    <form method="post" action="repo_pdfasp.php">

                                        <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-3 ">
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                    <input type="Text" class="form-control border-input" id="input0"  name="ape_pat" requiered="true"   disabled="disabled" >
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                    <input type="text" class="form-control border-input" value="" name="ape_mat" requiered="true"  disabled="disabled" >
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Nombre(s)</label>
                                                    <input type="text" class="form-control border-input" value="" name="nombre" required="true" disabled="disabled" >
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Direccion</label>
                                                    <input type="text" class="form-control border-input" value= "" name="direccion" requiered="true" disabled="disabled" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Colonia</label>
                                                    <input type="text" class="form-control border-input"  value="" name="colonia" requiered="true" disabled="disabled" >
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Ciudad</label>
                                                    <input type="text" class="form-control border-input"  value="" name="ciudad" disabled="disabled"  >
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Estado</label>
                                                    <input type="text" class="form-control border-input"  value="" name="ciudad" disabled="disabled" >
                                                </div>
                                            </div>

                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Codigo Postal</label>
                                                    <input type="text" class="form-control border-input"  value="" name="ciudad" disabled="disabled" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Correo Electronico</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Celular</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled" >
                                                </div>
                                            </div>

                                           <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Fecha Nacimiento</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Sexo</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                    </br>

                                    <div class="col-md-12 col-md-offset-1">
                                    <p class="text-info">INFORMACION DE PADRE</p>
                                    </div>

                                        <!-- info del papa -->
                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                       <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ocupación</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Lugar de Trabajo</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Ingreso Formal</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ingreso Informal</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                <div class="col-md-12 col-md-offset-1">
                                    <p class="text-info">INFORMACION DE LA MADRE</p>
                                    </div>

                                        <!-- info del papa -->
                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Apellido Paterno</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Apellido Materno</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled" >
                                                </div>
                                            </div>

                                       <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ocupación</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled" >
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Lugar de Trabajo</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Ingreso Formal</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ingreso Informal</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                     </div>


                                      <div class="col-md-12 col-md-offset-1">
                                    <p class="text-info">INFORMACION GENERAL</p>
                                    </div>

                                        <!-- info general-->
                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Ciudad de Nacimiento</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tiempo de Residencia</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                       <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tienes Casa Propia</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Describe los materiales de tu casa </label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Tu o tu familia tiene carros?</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Cuantas personas forman tu familia?</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Cuantas Personas viven en tu casa?</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                     </div>

                                <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Tu o tus padres tienen cuentas bancarias?</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Trabajo</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                     </div>

                             <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Tipo de beca solicitada</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Internet en casa?</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                     </div>



                                        <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Hablas Ingles?</label>
                                                    <input type="text" class="form-control border-input" value="" name="telefono" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Porcentaje</label>
                                                    <input type="text" class="form-control border-input"  value="" name="celular" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                     </div>




                                       <div class="col-md-12 col-md-offset-1">
                                    <p class="text-info">HISTORIAL ACADEMICO</p>
                                    </div>

                                        <!-- info general-->
                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Preparatoria </label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Prom</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                       <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                       <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Años Cursados</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                        </div>


                                        <!-- info general-->
                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Secundaria</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>Prom</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                       <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Dirección</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                       <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Años Cursados</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                        </div>

                                    <div class="col-md-12 col-md-offset-1">
                                    <p class="text-info">ACTIVIDADES EXTRACURRICULARES</p>
                                    </div>

                                    <!--HISTORIAL ACADEMICO-->
                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Mes/año a</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Mes/año a</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                       <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Total de Horas</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                       <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Insitucion</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>


                                    <div class="col-md-12 col-md-offset-1">
                                    <p class="text-info">RECONOCIMIENTOS</p>
                                    </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Reconocimiento</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Institucion/Descripcion</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Reconocimiento</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Institucion/Descripcion</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>


                                    <div class="col-md-12 col-md-offset-1">
                                    <p class="text-info">PROPUESTA DE ESTUDIO</p>
                                    </div>

                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Carrera seleccionada</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Universidad</label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>


                                    <div class="col-md-12 col-md-offset-1">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estudio de tiempo completo?</label>
                                                   <input type="text" class="form-control border-input" name="fecha_nac" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>

                                           <div class="col-md-5">
                                                <div class="form-group">
                                                    <label><RP>Contacto</RP></label>
                                                   <input type="text" class="form-control border-input" name="sexo" value="" requiered="true" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>

                                       <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd" name="submit">Generar Reporte</button>
                                        </div>
                                    </br>
                                        <div class="clearfix"></div>
                                    </form>





                             </div><!-- cierra el div content final -->

                        </div> <!-- cierra el div card -->

                     </div><!-- cierra el div col-md-12 -->

                </div><!-- cierra el div row-->

            </div> <!-- cierra el div container-fluid-->

         </div><!-- cierra el div content-->

    </div><!-- cierra el div del panel responsive-->





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
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="">Interface</a>
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



    <script type="text/javascript">
        $(document).ready(function(){
            demo.initOverviewDashboard();
            demo.initCirclePercentage();

        });
    </script>

    <script type="text/javascript">

        var $table = $('#bootstrap-table');

            function operateFormatter(value, row, index) {
                return [
                    '<div class="table-icons">',
                        '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
                            '<i class="ti-image"></i>',
                        '</a>',
                        '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
                            '<i class="ti-pencil-alt"></i>',
                        '</a>',
                        '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                            '<i class="ti-close"></i>',
                        '</a>',
                    '</div>',
                ].join('');
            }

            $().ready(function(){
                window.operateEvents = {
                    'click .view': function (e, value, row, index) {
                        info = JSON.stringify(row);

                        swal('You click view icon, row: ', info);
                        console.log(info);
                    },
                    'click .edit': function (e, value, row, index) {
                        info = JSON.stringify(row);

                        swal('You click edit icon, row: ', info);
                        console.log(info);
                    },
                    'click .remove': function (e, value, row, index) {
                        console.log(row);
                        $table.bootstrapTable('remove', {
                            field: 'id',
                            values: [row.id]
                        });
                    }
                };

                $table.bootstrapTable({
                    toolbar: ".toolbar",
                    clickToSelect: true,
                    showRefresh: true,
                    search: true,
                    showToggle: true,
                    showColumns: true,
                    pagination: true,
                    searchAlign: 'left',
                    pageSize: 8,
                    clickToSelect: false,
                    pageList: [8,10,25,50,100],

                    formatShowingRows: function(pageFrom, pageTo, totalRows){
                        //do nothing here, we don't want to show the text "showing x of y from..."
                    },
                    formatRecordsPerPage: function(pageNumber){
                        return pageNumber + " rows visible";
                    },
                    icons: {
                        refresh: 'fa fa-refresh',
                        toggle: 'fa fa-th-list',
                        columns: 'fa fa-columns',
                        detailOpen: 'fa fa-plus-circle',
                        detailClose: 'ti-close'
                    }
                });

                //activate the tooltips after the data table is initialized
                $('[rel="tooltip"]').tooltip();

                $(window).resize(function () {
                    $table.bootstrapTable('resetView');
                });
            });

    </script>


</html>
