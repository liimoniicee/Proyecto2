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

    
     <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <script src="Highcharts-6.1.0/code/highcharts.js"></script>
    <script src="Highcharts-6.1.0/code/modules/data.js"></script>
    <script src="Highcharts-6.1.0/code/modules/drilldown.js"></script>


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
                    <li class="">
                        <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
                            <i class="ti-user"></i>
                            <p>Perfil de Usuario
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="dashboardOverview">
                            <ul class="nav">
                                <li class="">
                                    <a href="ingles.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Editar Perfil</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
  </li>
                         <li class="">
                        <a href="admin.php" aria-expanded="true">
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


                    <li class="active">
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard" ></i>

                            <p>
                                Asistencia 
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">

                                <li class="">
                                    <a href="asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia de Ingles</span>
                                    </a>
                                </li>
                                  <li class="active">
                                    <a href="asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Mostrar asistencia</span>
                                    </a>
                                </li>

                              

                            </ul>
                        </div>
                    </li>
                    <li>
                      
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                          
                                <li>
                               
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
                           Ingles
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">

    

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                    <i class="ti-user"></i>
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
                                    <li><a href="assets/manual/manual.pdf">Manual de usaurio</a></li>
                                    <li><a href="#not2"></a></li>
                                    <li><a href="#not3">Notification 3</a></li>
                                    <li><a href="#not4">Notification 4</a></li>
                                    <li><a href="#another">Another notification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="destroy.php" class="btn-rotate">
                                   <i class="ti-settings"></i>
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
                        <div class="col-lg-3 col-sm-6">
                            
                        </div>
                      
                      
                      
                    </div>

                       <!--<p> hoola</p>
                       <iframe src="assets/manual/manual.pdf"></iframe>-->
                   
                 <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
         


        <script type="text/javascript">

// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: { <?php $fecha_actual=date("d/m/Y");?>
        text: 'Asistencias . <?php echo date("Y-m-d");?>'
    }, 
    subtitle: {
        text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total de asistencias por dia '
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [
        {
            "name": "Browsers",
            "colorByPoint": true,
            "data": [
                           <?php 
            
            include 'conexion.php';
            /*$consulta = "SELECT u.USU_NOMBRE, u.USU_APELLIDO_PATERNO, u.ID_USUARIO,
                                b.BEC_ID_USUARIO, b.ID_BECARIO FROM usuarios u, becario b
                                WHERE
                                
                                b.BEC_ID_USUARIO = u.ID_USUARIO";

            $consulta2 = "SELECT a.ASI_ASISTENCIA,a.ASI_FECHA,a.ASI_ID_BECARIO,
                                 b.ID_BECARIO,b.BEC_ID_USUARIO from asistencia a, becario b 
                                 where a.ASI_ID_BECARIO = b.ID_BECARIO"; */
             $consulta = "SELECT u.USU_NOMBRE, u.USU_APELLIDO_PATERNO, u.ID_USUARIO,
b.BEC_ID_USUARIO, b.ID_BECARIO,a.ASI_ASISTENCIA,a.ASI_FECHA,a.ASI_ID_BECARIO FROM usuarios u, becario b , asistencia a
                                WHERE
                                
                                b.BEC_ID_USUARIO = u.ID_USUARIO and a.ASI_ID_BECARIO=b.ID_BECARIO";
            
            $ejecutar = mysqli_query($conn, $consulta); 
            //$ejecutar2 = mysqli_query($conn, $consulta2); 
            $i = 0;
            $fecha_actual=date("d/m/Y");
            while($row=mysqli_fetch_array($ejecutar)){ 
                    
                
          $var_nombre     =     $row['USU_NOMBRE'];  
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
         
          $var_idbec       =     $row['ID_BECARIO'];
        
          $var_id         =     $row['ID_USUARIO'];

                $i++;   
            
        ?>
                {
                    "name": "<?php echo $var_nombre ?>",
                    "y": <?php echo $row['ASI_ASISTENCIA']; ?> ,
                    "drilldown": "Chrome"
                }, 
              <?php }     ?>
            ]
        }
    ],
    "drilldown": {
        "series": [
        <?php 
            
            include 'conexion.php';
            /*$consulta = "SELECT u.USU_NOMBRE, u.USU_APELLIDO_PATERNO, u.ID_USUARIO,
                                b.BEC_ID_USUARIO, b.ID_BECARIO FROM usuarios u, becario b
                                WHERE
                                
                                b.BEC_ID_USUARIO = u.ID_USUARIO";

            $consulta2 = "SELECT a.ASI_ASISTENCIA,a.ASI_FECHA,a.ASI_ID_BECARIO,
                                 b.ID_BECARIO,b.BEC_ID_USUARIO from asistencia a, becario b 
                                 where a.ASI_ID_BECARIO = b.ID_BECARIO"; */
             $consulta2 = "SELECT u.USU_NOMBRE, u.USU_APELLIDO_PATERNO, u.ID_USUARIO,
b.BEC_ID_USUARIO, b.ID_BECARIO,a.ASI_ASISTENCIA,a.ASI_FECHA,a.ASI_ID_BECARIO FROM usuarios u, becario b , asistencia a
                                WHERE
                                
                                b.BEC_ID_USUARIO = u.ID_USUARIO and a.ASI_ID_BECARIO=b.ID_BECARIO";
            
            $ejecutar = mysqli_query($conn, $consulta2); 
            //$ejecutar2 = mysqli_query($conn, $consulta2); 
            $i = 0;
            $fecha_actual=date("d/m/Y");
            while($row2=mysqli_fetch_array($ejecutar)){ 
                    
                
          $var_nombre     =     $row2['USU_NOMBRE'];  
          $var_apellidop  =     $row2['USU_APELLIDO_PATERNO'];
         
          $var_idbec       =     $row2['ID_BECARIO'];
        
          $var_id         =     $row2['ID_USUARIO'];

                $i++;   
            
        ?>

            {
                "name": "<?php echo $row2['ASI_FECHA']; ?>",
                "id": "Chrome",
                "data": [
                    [
                        "<?php echo $row2['ASI_FECHA']; ?>",
                        0.1
                    ],
                     
                ]

            },
            <?php }     ?>
        ]
    }
});



        </script>
 

 <!--<div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>

<!-- Data from www.netmarketshare.com. Select Browsers => Desktop share by version. Download as tsv. -->
<!--<pre id="tsv" style="display:none">Browser Version    Total Market Share
Microsoft Internet Explorer 8.0    26.61%
Microsoft Internet Explorer 9.0    16.96%
Chrome 18.0    8.01%
Chrome 19.0    7.73%
Firefox 12    6.72%
Microsoft Internet Explorer 6.0    6.40%
Firefox 11    4.72%
Microsoft Internet Explorer 7.0    3.55%
Safari 5.1    3.53%
Firefox 13    2.16%
Firefox 3.6    1.87%
Opera 11.x    1.30%
Chrome 17.0    1.13%
Firefox 10    0.90%
Safari 5.0    0.85%
Firefox 9.0    0.65%
Firefox 8.0    0.55%
Firefox 4.0    0.50%
Chrome 16.0    0.45%
Firefox 3.0    0.36%
Firefox 3.5    0.36%
Firefox 6.0    0.32%
Firefox 5.0    0.31%
Firefox 7.0    0.29%
Proprietary or Undetectable    0.29%
Chrome 18.0 - Maxthon Edition    0.26%
Chrome 14.0    0.25%
Chrome 20.0    0.24%
Chrome 15.0    0.18%
Chrome 12.0    0.16%
Opera 12.x    0.15%
Safari 4.0    0.14%
Chrome 13.0    0.13%
Safari 4.1    0.12%
Chrome 11.0    0.10%
Firefox 14    0.10%
Firefox 2.0    0.09%
Chrome 10.0    0.09%
Opera 10.x    0.09%
Microsoft Internet Explorer 8.0 - Tencent Traveler Edition    0.09%</pre>



        <script type="text/javascript">

// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Browser market shares. January, 2018'
    },
    subtitle: {
        text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [
        {
            "name": "Browsers",
            "colorByPoint": true,
            "data": [
                    <?php 
            
            include 'conexion.php';
            $consulta = "SELECT u.USU_NOMBRE, u.USU_APELLIDO_PATERNO, u.ID_USUARIO,
                                b.BEC_ID_USUARIO, b.ID_BECARIO FROM usuarios u, becario b
                                WHERE
                                
                                b.BEC_ID_USUARIO = u.ID_USUARIO";
            
            $ejecutar = mysqli_query($conn, $consulta); 
            
            $i = 0;
            $fecha_actual=date("d/m/Y");
            while($row=mysqli_fetch_array($ejecutar)){         
                
          $var_nombre     =     $row['USU_NOMBRE'];  
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
         
          $var_idbec       =     $row['ID_BECARIO'];
        
          $var_id         =     $row['ID_USUARIO'];

                $i++;   
            
        ?>
                {
            
                    "name": '<?php echo $row['USU_NOMBRE']; ?>',
                    "y": <?php echo $row['ID_USUARIO']; ?>  ,
                    "drilldown": "Chrome"
                },
              <?php }?>
            ]
        }
    ],
    "drilldown": {
        "series": [
            {
                "name": "Chrome",
                "id": "Chrome",
                "data": [
                    [
                        "v65.0",
                        0.1
                    ],
                    [
                        "v64.0",
                        1.3
                    ],
                    [
                        "v63.0",
                        53.02
                    ],
                    [
                        "v62.0",
                        1.4
                    ],
                    [
                        "v61.0",
                        0.88
                    ],
                    [
                        "v60.0",
                        0.56
                    ],
                    [
                        "v59.0",
                        0.45
                    ],
                    [
                        "v58.0",
                        0.49
                    ],
                    [
                        "v57.0",
                        0.32
                    ],
                    [
                        "v56.0",
                        0.29
                    ],
                    [
                        "v55.0",
                        0.79
                    ],
                    [
                        "v54.0",
                        0.18
                    ],
                    [
                        "v51.0",
                        0.13
                    ],
                    [
                        "v49.0",
                        2.16
                    ],
                    [
                        "v48.0",
                        0.13
                    ],
                    [
                        "v47.0",
                        0.11
                    ],
                    [
                        "v43.0",
                        0.17
                    ],
                    [
                        "v29.0",
                        0.26
                    ]
                ]
            },
            {
                "name": "Firefox",
                "id": "Firefox",
                "data": [
                    [
                        "v58.0",
                        1.02
                    ],
                    [
                        "v57.0",
                        7.36
                    ],
                    [
                        "v56.0",
                        0.35
                    ],
                    [
                        "v55.0",
                        0.11
                    ],
                    [
                        "v54.0",
                        0.1
                    ],
                    [
                        "v52.0",
                        0.95
                    ],
                    [
                        "v51.0",
                        0.15
                    ],
                    [
                        "v50.0",
                        0.1
                    ],
                    [
                        "v48.0",
                        0.31
                    ],
                    [
                        "v47.0",
                        0.12
                    ]
                ]
            },
            {
                "name": "Internet Explorer",
                "id": "Internet Explorer",
                "data": [
                    [
                        "v11.0",
                        6.2
                    ],
                    [
                        "v10.0",
                        0.29
                    ],
                    [
                        "v9.0",
                        0.27
                    ],
                    [
                        "v8.0",
                        0.47
                    ]
                ]
            },
            {
                "name": "Safari",
                "id": "Safari",
                "data": [
                    [
                        "v11.0",
                        3.39
                    ],
                    [
                        "v10.1",
                        0.96
                    ],
                    [
                        "v10.0",
                        0.36
                    ],
                    [
                        "v9.1",
                        0.54
                    ],
                    [
                        "v9.0",
                        0.13
                    ],
                    [
                        "v5.1",
                        0.2
                    ]
                ]
            },
            {
                "name": "Edge",
                "id": "Edge",
                "data": [
                    [
                        "v16",
                        2.6
                    ],
                    [
                        "v15",
                        0.92
                    ],
                    [
                        "v14",
                        0.4
                    ],
                    [
                        "v13",
                        0.1
                    ]
                ]
            },
            {
                "name": "Opera",
                "id": "Opera",
                "data": [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            }
        ]
    }
});
        </script> -->


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="http://www.creative-tim.com">
                                    Facebook
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
    <script src="ssets/js/jquery.sharrre.js"></script>

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
